<x-layout>
    <section class="relative isolate overflow-hidden bg-slate-950">
        <img
            src="{{ asset('images/banner.webp') }}"
            alt="RSU Global PAL Center"
            class="absolute inset-0 -z-10 h-full w-full object-cover opacity-45"
        />
        <div class="absolute inset-0 -z-10 bg-[linear-gradient(90deg,rgba(15,23,42,.96),rgba(15,23,42,.74),rgba(15,23,42,.18))]"></div>

        <div class="mx-auto grid min-h-[calc(100vh-4rem)] max-w-7xl items-center gap-10 px-4 py-16 sm:px-6 lg:grid-cols-[1.05fr_.95fr] lg:px-8">
            <div class="max-w-3xl text-white">
                <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/20 bg-white/10 px-3 py-1.5 text-xs font-semibold uppercase tracking-wide text-violet-100 backdrop-blur">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    Peer-Assisted Learning Center
                </div>

                <h1 class="text-4xl font-bold leading-tight sm:text-5xl lg:text-6xl">
                    RSU Global PAL Center
                </h1>
                <p class="mt-5 max-w-2xl text-base leading-7 text-slate-200 sm:text-lg">
                    Build English confidence with mentors, guided practice, useful resources, and a welcoming international learning community.
                </p>

                <div class="mt-8 flex flex-col gap-3 sm:flex-row">
                    <a
                        href="{{ route('register.mentor') }}"
                        class="inline-flex items-center justify-center rounded-lg bg-[#7D3C98] px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-violet-950/30 transition hover:bg-[#6f328a]"
                    >
                        Join Mentorship
                    </a>
                    <a
                        href="{{ route('register.student') }}"
                        class="inline-flex items-center justify-center rounded-lg border border-white/25 bg-white/10 px-5 py-3 text-sm font-semibold text-white backdrop-blur transition hover:bg-white/15"
                    >
                        Register as Student
                    </a>
                </div>
            </div>

            <div class="grid gap-3 rounded-lg border border-white/10 bg-white/10 p-4 text-white shadow-2xl shadow-slate-950/25 backdrop-blur-md sm:grid-cols-3 lg:grid-cols-1">
                <div class="rounded-lg bg-white p-4 text-slate-900">
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Students</p>
                    <p class="mt-2 text-3xl font-bold text-[#7D3C98]">{{ number_format($totalStudents) }}+</p>
                </div>
                <div class="rounded-lg bg-white p-4 text-slate-900">
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Mentors</p>
                    <p class="mt-2 text-3xl font-bold text-emerald-600">{{ number_format($totalMentors) }}+</p>
                </div>
                <div class="rounded-lg bg-white p-4 text-slate-900">
                    <p class="text-xs font-semibold uppercase tracking-wide text-slate-500">Team Leaders</p>
                    <p class="mt-2 text-3xl font-bold text-sky-600">{{ number_format($totalTeamLeaders) }}+</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto max-w-7xl">
            <div class="max-w-2xl">
                <p class="text-sm font-semibold uppercase tracking-wide text-[#7D3C98]">What You Can Explore</p>
                <h2 class="mt-3 text-3xl font-bold text-slate-950 sm:text-4xl">Helpful pathways for the RSU Global community</h2>
                <p class="mt-4 text-sm leading-6 text-slate-600 sm:text-base">
                    Find learning materials, mentoring opportunities, English practice, and community updates in one place.
                </p>
            </div>

            <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-4">
                <a href="{{ route('newsletter') }}" class="group rounded-lg border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-[#7D3C98]/40 hover:shadow-md">
                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-violet-100 text-[#7D3C98]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75A8.25 8.25 0 0 0 4.5 3v15A8.25 8.25 0 0 1 12 21a8.25 8.25 0 0 1 7.5-3V3A8.25 8.25 0 0 0 12 6.75Zm0 0V21" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-slate-950">RSU Global Newsletter</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">Read updates, announcements, and learning resources from the RSU Global team.</p>
                    <span class="mt-5 inline-flex text-sm font-semibold text-[#7D3C98] group-hover:underline">Learn More</span>
                </a>

                <a href="{{ route('register.mentor') }}" class="group rounded-lg border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-emerald-500/40 hover:shadow-md">
                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-emerald-100 text-emerald-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 18.75a4.5 4.5 0 0 0-9 0M12 12a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm6.75 6.75a3.75 3.75 0 0 0-3.1-3.69M15.75 7.5a2.25 2.25 0 1 1 0 4.5" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-slate-950">Mentorship</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">Connect with peers, share experience, and support English communication growth.</p>
                    <span class="mt-5 inline-flex text-sm font-semibold text-emerald-700 group-hover:underline">Join Now</span>
                </a>

                <a href="#" class="group rounded-lg border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-sky-500/40 hover:shadow-md">
                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-sky-100 text-sky-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5V6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25V19.5m-15 0h15m-15 0A2.25 2.25 0 0 0 6.75 21h10.5a2.25 2.25 0 0 0 2.25-1.5M8.25 8.25h7.5M8.25 12h7.5" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-slate-950">RSU/IRS 127</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">Improve writing, presentation skills, speaking confidence, and academic communication.</p>
                    <span class="mt-5 inline-flex text-sm font-semibold text-sky-700 group-hover:underline">Explore</span>
                </a>

                <a href="https://www.youtube.com/@RSUGlobal555/featured" class="group rounded-lg border border-slate-200 bg-white p-5 shadow-sm transition hover:-translate-y-0.5 hover:border-rose-500/40 hover:shadow-md">
                    <div class="flex h-11 w-11 items-center justify-center rounded-lg bg-rose-100 text-rose-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m10.5 8.25 5.25 3.75-5.25 3.75v-7.5ZM4.5 6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25H6.75a2.25 2.25 0 0 1-2.25-2.25V6.75Z" />
                        </svg>
                    </div>
                    <h3 class="mt-4 text-lg font-semibold text-slate-950">YouTube @RSUGlobal</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">Watch language learning resources, community stories, and cultural insight videos.</p>
                    <span class="mt-5 inline-flex text-sm font-semibold text-rose-700 group-hover:underline">Watch Videos</span>
                </a>
            </div>
        </div>
    </section>

    <section class="bg-slate-50 px-4 py-16 sm:px-6 lg:px-8">
        <div class="mx-auto grid max-w-7xl items-center gap-8 lg:grid-cols-[.9fr_1.1fr]">
            <div>
                <p class="text-sm font-semibold uppercase tracking-wide text-[#7D3C98]">Why PAL</p>
                <h2 class="mt-3 text-3xl font-bold text-slate-950 sm:text-4xl">Practice with people who understand the journey</h2>
                <p class="mt-4 text-base leading-7 text-slate-600">
                    PAL gives students a friendly way to practice, ask questions, and grow through peer support. Mentors and team leaders help keep the learning practical, human, and consistent.
                </p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2">
                <div class="rounded-lg border border-slate-200 bg-white p-5">
                    <h3 class="text-base font-semibold text-slate-950">Peer Support</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">Learn with mentors who can explain ideas clearly and share real student experience.</p>
                </div>
                <div class="rounded-lg border border-slate-200 bg-white p-5">
                    <h3 class="text-base font-semibold text-slate-950">Confidence Building</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">Practice communication in a low-pressure space before using English in class or work.</p>
                </div>
                <div class="rounded-lg border border-slate-200 bg-white p-5">
                    <h3 class="text-base font-semibold text-slate-950">Useful Resources</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">Access newsletters, videos, forms, and links that support ongoing learning.</p>
                </div>
                <div class="rounded-lg border border-slate-200 bg-white p-5">
                    <h3 class="text-base font-semibold text-slate-950">Community</h3>
                    <p class="mt-2 text-sm leading-6 text-slate-600">Meet people across programs and build stronger international connections at RSU.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-[#7D3C98] px-4 py-14 text-white sm:px-6 lg:px-8">
        <div class="mx-auto flex max-w-7xl flex-col items-start justify-between gap-6 lg:flex-row lg:items-center">
            <div>
                <h2 class="text-3xl font-bold">Ready to start your journey?</h2>
                <p class="mt-3 max-w-2xl text-sm leading-6 text-violet-100">
                    Register, connect with the PAL community, and take the next step in your English communication practice.
                </p>
            </div>
            <div class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row">
                <a
                    href="{{ route('register.student') }}"
                    class="inline-flex justify-center rounded-lg bg-white px-5 py-3 text-sm font-semibold text-[#7D3C98] transition hover:bg-violet-50"
                >
                    Register Student
                </a>
                <a
                    href="{{ route('login') }}"
                    class="inline-flex justify-center rounded-lg border border-white/30 px-5 py-3 text-sm font-semibold text-white transition hover:bg-white/10"
                >
                    Log In
                </a>
            </div>
        </div>
    </section>
</x-layout>
