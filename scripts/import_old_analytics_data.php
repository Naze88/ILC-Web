<?php

$sqlPath = 'C:\Users\user\Downloads\ILC_DB.sql';
$sqlitePath = __DIR__ . '/../database/database.sqlite';

$tables = [
    'users',
    'admins',
    'students',
    'mentors',
    'team_leaders',
    'team_leader_timetables',
    'timetables',
    'appointments',
    'forms',
    'student_forms',
    'mentor_forms',
    'team_leader_forms',
    'file_upload_links',
];

if (! is_file($sqlPath)) {
    fwrite(STDERR, "SQL dump not found: {$sqlPath}\n");
    exit(1);
}

if (! is_file($sqlitePath)) {
    fwrite(STDERR, "SQLite database not found: {$sqlitePath}\n");
    exit(1);
}

$dump = file_get_contents($sqlPath);
$db = new PDO('sqlite:' . $sqlitePath);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$db->exec('PRAGMA foreign_keys = OFF');
$db->beginTransaction();

$imported = [];

foreach ($tables as $table) {
    $imported[$table] = 0;

    if (! preg_match_all('/INSERT INTO `' . preg_quote($table, '/') . '`\s*\((.*?)\)\s*VALUES\s*(.*?);/is', $dump, $matches, PREG_SET_ORDER)) {
        continue;
    }

    foreach ($matches as $match) {
        $columns = $match[1];
        $values = $match[2];
        $statement = 'INSERT OR IGNORE INTO `' . $table . '` (' . $columns . ') VALUES ' . $values;

        $before = (int) $db->query('SELECT count(*) FROM `' . $table . '`')->fetchColumn();
        $db->exec($statement);
        $after = (int) $db->query('SELECT count(*) FROM `' . $table . '`')->fetchColumn();

        $imported[$table] += max(0, $after - $before);
    }
}

$db->commit();
$db->exec('PRAGMA foreign_keys = ON');

foreach ($imported as $table => $count) {
    echo $table . ': +' . $count . PHP_EOL;
}

