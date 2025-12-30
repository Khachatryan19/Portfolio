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
                    @foreach($data['contacts'] as $type => $contact)
                        <a href="{{ $type === 'email' ? 'mailto:' . $contact['value'] : $contact['value'] }}" 
                           {{ $type !== 'email' ? 'target="_blank" rel="noopener noreferrer"' : '' }} 
                           class="footer-link">
                            {!! $contactIcons[$type] ?? '' !!}
                            {{ $type === 'email' ? $contact['value'] : $contact['label'] }}
                        </a>
                    @endforeach
                </div>
                <p>&copy; {{ date('Y') }} GRISHA KHACHATRYAN. Built with Laravel.</p>
            </div>
        </div>
    </footer>
@endsection

