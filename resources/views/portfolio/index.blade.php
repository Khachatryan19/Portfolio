@extends('layouts.app')

@section('content')
    <header>
        <div class="container">
            <div class="hero-content">
                <div class="name-title">GRISHA KHACHATRYAN</div>
                <h1>Backend Developer</h1>
                <p>Building Scalable & Reliable Web Applications</p>
                <div class="contact-links">
                    @php
                        $contactIcons = [
                            'email' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'linkedin' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 8C17.5913 8 19.1174 8.63214 20.2426 9.75736C21.3679 10.8826 22 12.4087 22 14V21H18V14C18 13.4696 17.7893 12.9609 17.4142 12.5858C17.0391 12.2107 16.5304 12 16 12C15.4696 12 14.9609 12.2107 14.5858 12.5858C14.2107 12.9609 14 13.4696 14 14V21H10V14C10 12.4087 10.6321 10.8826 11.7574 9.75736C12.8826 8.63214 14.4087 8 16 8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 9H2V21H6V9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 6C5.10457 6 6 5.10457 6 4C6 2.89543 5.10457 2 4 2C2.89543 2 2 2.89543 2 4C2 5.10457 2.89543 6 4 6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'github' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 22V18C15.1392 16.7473 14.78 15.4901 14 14.5C17 14.5 20 12.5 20 9C20.08 7.75 19.73 6.52 19 5.5C19.28 4.35 19.28 3.15 19 2C19 2 18 1.5 16 2.5C13.36 2 10.64 2 8 2.5C6 1.5 5 2 5 2C4.7 3.15 4.7 4.35 5 5.5C4.27 6.52 3.92 7.75 4 9C4 12.5 7 14.5 10 14.5C9.61 14.99 9.32 15.55 9.15 16.15C8.98 16.75 8.93 17.38 9 18V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 18C4.49 20 4 16 2 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'gitlab' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.65 14.39L12 22.13L1.35 14.39C1.1 14.23 0.95 13.96 0.95 13.67V10.33C0.95 10.04 1.1 9.77 1.35 9.61L2.5 8.89V6.5C2.5 6.22 2.59 5.96 2.76 5.76L4.85 3.67C5.03 3.49 5.26 3.39 5.5 3.39C5.74 3.39 5.97 3.49 6.15 3.67L8.24 5.76C8.41 5.96 8.5 6.22 8.5 6.5V8.89L12 6.87L15.5 8.89V6.5C15.5 6.22 15.59 5.96 15.76 5.76L17.85 3.67C18.03 3.49 18.26 3.39 18.5 3.39C18.74 3.39 18.97 3.49 19.15 3.67L21.24 5.76C21.41 5.96 21.5 6.22 21.5 6.5V8.89L22.65 9.61C22.9 9.77 23.05 10.04 23.05 10.33V13.67C23.05 13.96 22.9 14.23 22.65 14.39Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'bitbucket' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.18 2.18L3.54 18.82C3.63 19.77 4.4 20.5 5.35 20.5H18.65C19.6 20.5 20.37 19.77 20.46 18.82L21.82 2.18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.5 14.5H15.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 8.5L8.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 8.5L15.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'codewars' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'instagram' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 11.37C16.1234 12.2022 15.9812 13.0522 15.5937 13.815C15.2062 14.5778 14.5931 15.2099 13.8416 15.63C13.0901 16.0501 12.2384 16.2409 11.38 16.18C10.5216 16.1191 9.70751 15.8092 9.03312 15.2906C8.35873 14.772 7.85703 14.0703 7.59372 13.2721C7.33041 12.4739 7.31745 11.6161 7.55672 10.8102C7.79599 10.0043 8.27745 9.28829 8.93781 8.75737C9.59817 8.22645 10.4058 7.90674 11.26 7.84C12.1191 7.77567 12.9736 7.95887 13.7241 8.36545C14.4746 8.77203 15.0857 9.38429 15.48 10.12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor"/></svg>',
                            'facebook' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'telegram' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.5 2L2 10.5L8.5 13L21.5 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.5 2L15 22L8.5 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.5 2L8.5 13L11.5 20L15 22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'twitter' => '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23 3C22.0424 3.67548 20.9821 4.19211 19.86 4.53C19.2577 3.83751 18.4573 3.34669 17.567 3.12393C16.6767 2.90116 15.7395 2.95718 14.8821 3.28445C14.0247 3.61172 13.2884 4.1944 12.773 4.95372C12.2575 5.71303 11.9877 6.61232 12 7.53V8.53C10.2426 8.57557 8.50127 8.18581 6.93101 7.39545C5.36074 6.60508 4.01032 5.43864 3 4C3 4 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.5C21 7.2 20.97 6.9 20.92 6.61C21.9406 5.66349 22.6608 4.39271 23 3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                        ];
                    @endphp
                    @foreach($data['contacts'] as $type => $contact)
                        <a href="{{ $type === 'email' ? 'mailto:' . $contact['value'] : $contact['value'] }}" 
                           {{ $type !== 'email' ? 'target="_blank" rel="noopener noreferrer"' : '' }} 
                           class="contact-link" 
                           title="{{ $contact['label'] }}">
                            {!! $contactIcons[$type] ?? '' !!}
                            <span>{{ $type === 'email' ? $contact['value'] : $contact['label'] }}</span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="scroll-indicator"></div>
    </header>

    <main>
        <!-- About Section -->
        <section id="about">
            <div class="container">
                <h2 class="section-title">{{ $data['about']['title'] }}</h2>
                <div class="about-content">
                    <p>{{ $data['about']['description'] }}</p>
                </div>
            </div>
        </section>

        <!-- Technologies Section -->
        <section id="technologies">
            <div class="container">
                <h2 class="section-title">Technologies I Work With</h2>
                <div class="tech-grid">
                    @foreach($data['technologies'] as $category => $technologies)
                        <div class="tech-category">
                            <h3>{{ $category }}</h3>
                            <div class="tech-tags">
                                @foreach($technologies as $tech)
                                    <span class="tech-tag"><span>{{ $tech }}</span></span>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Projects Section -->
        <section id="projects">
            <div class="container">
                <h2 class="section-title">Projects & Experience</h2>
                <div class="projects-grid">
                    @foreach($data['projects'] as $project)
                        <div class="project-card">
                            <h3>{{ $project['name'] }}</h3>
                            <p>{{ $project['description'] }}</p>
                        </div>
                    @endforeach
                </div>
                <div class="experience-content" style="margin-top: 3rem;">
                    <p>{{ $data['experience'] }}</p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-contact">
                    @php
                        $footerIcons = [
                            'email' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M22 6L12 13L2 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'linkedin' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M16 8C17.5913 8 19.1174 8.63214 20.2426 9.75736C21.3679 10.8826 22 12.4087 22 14V21H18V14C18 13.4696 17.7893 12.9609 17.4142 12.5858C17.0391 12.2107 16.5304 12 16 12C15.4696 12 14.9609 12.2107 14.5858 12.5858C14.2107 12.9609 14 13.4696 14 14V21H10V14C10 12.4087 10.6321 10.8826 11.7574 9.75736C12.8826 8.63214 14.4087 8 16 8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M6 9H2V21H6V9Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M4 6C5.10457 6 6 5.10457 6 4C6 2.89543 5.10457 2 4 2C2.89543 2 2 2.89543 2 4C2 5.10457 2.89543 6 4 6Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'github' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M15 22V18C15.1392 16.7473 14.78 15.4901 14 14.5C17 14.5 20 12.5 20 9C20.08 7.75 19.73 6.52 19 5.5C19.28 4.35 19.28 3.15 19 2C19 2 18 1.5 16 2.5C13.36 2 10.64 2 8 2.5C6 1.5 5 2 5 2C4.7 3.15 4.7 4.35 5 5.5C4.27 6.52 3.92 7.75 4 9C4 12.5 7 14.5 10 14.5C9.61 14.99 9.32 15.55 9.15 16.15C8.98 16.75 8.93 17.38 9 18V22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 18C4.49 20 4 16 2 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'gitlab' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M22.65 14.39L12 22.13L1.35 14.39C1.1 14.23 0.95 13.96 0.95 13.67V10.33C0.95 10.04 1.1 9.77 1.35 9.61L2.5 8.89V6.5C2.5 6.22 2.59 5.96 2.76 5.76L4.85 3.67C5.03 3.49 5.26 3.39 5.5 3.39C5.74 3.39 5.97 3.49 6.15 3.67L8.24 5.76C8.41 5.96 8.5 6.22 8.5 6.5V8.89L12 6.87L15.5 8.89V6.5C15.5 6.22 15.59 5.96 15.76 5.76L17.85 3.67C18.03 3.49 18.26 3.39 18.5 3.39C18.74 3.39 18.97 3.49 19.15 3.67L21.24 5.76C21.41 5.96 21.5 6.22 21.5 6.5V8.89L22.65 9.61C22.9 9.77 23.05 10.04 23.05 10.33V13.67C23.05 13.96 22.9 14.23 22.65 14.39Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'bitbucket' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2.18 2.18L3.54 18.82C3.63 19.77 4.4 20.5 5.35 20.5H18.65C19.6 20.5 20.37 19.77 20.46 18.82L21.82 2.18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M8.5 14.5H15.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M9 8.5L8.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M15 8.5L15.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'codewars' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 17L12 22L22 17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M2 12L12 17L22 12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'instagram' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="2" y="2" width="20" height="20" rx="5" ry="5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M16 11.37C16.1234 12.2022 15.9812 13.0522 15.5937 13.815C15.2062 14.5778 14.5931 15.2099 13.8416 15.63C13.0901 16.0501 12.2384 16.2409 11.38 16.18C10.5216 16.1191 9.70751 15.8092 9.03312 15.2906C8.35873 14.772 7.85703 14.0703 7.59372 13.2721C7.33041 12.4739 7.31745 11.6161 7.55672 10.8102C7.79599 10.0043 8.27745 9.28829 8.93781 8.75737C9.59817 8.22645 10.4058 7.90674 11.26 7.84C12.1191 7.77567 12.9736 7.95887 13.7241 8.36545C14.4746 8.77203 15.0857 9.38429 15.48 10.12" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><circle cx="17.5" cy="6.5" r="1.5" fill="currentColor"/></svg>',
                            'facebook' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18 2H15C13.6739 2 12.4021 2.52678 11.4645 3.46447C10.5268 4.40215 10 5.67392 10 7V10H7V14H10V22H14V14H17L18 10H14V7C14 6.73478 14.1054 6.48043 14.2929 6.29289C14.4804 6.10536 14.7348 6 15 6H18V2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'telegram' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M21.5 2L2 10.5L8.5 13L21.5 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.5 2L15 22L8.5 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M21.5 2L8.5 13L11.5 20L15 22" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'twitter' => '<svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M23 3C22.0424 3.67548 20.9821 4.19211 19.86 4.53C19.2577 3.83751 18.4573 3.34669 17.567 3.12393C16.6767 2.90116 15.7395 2.95718 14.8821 3.28445C14.0247 3.61172 13.2884 4.1944 12.773 4.95372C12.2575 5.71303 11.9877 6.61232 12 7.53V8.53C10.2426 8.57557 8.50127 8.18581 6.93101 7.39545C5.36074 6.60508 4.01032 5.43864 3 4C3 4 -1 13 8 17C5.94053 18.398 3.48716 19.099 1 19C10 24 21 19 21 7.5C21 7.2 20.97 6.9 20.92 6.61C21.9406 5.66349 22.6608 4.39271 23 3Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                        ];
                    @endphp
                    @foreach($data['contacts'] as $type => $contact)
                        <a href="{{ $type === 'email' ? 'mailto:' . $contact['value'] : $contact['value'] }}" 
                           {{ $type !== 'email' ? 'target="_blank" rel="noopener noreferrer"' : '' }} 
                           class="footer-link">
                            {!! $footerIcons[$type] ?? '' !!}
                            {{ $type === 'email' ? $contact['value'] : $contact['label'] }}
                        </a>
                    @endforeach
                </div>
                <p>&copy; {{ date('Y') }} GRISHA KHACHATRYAN. Built with Laravel.</p>
            </div>
        </div>
    </footer>
@endsection

