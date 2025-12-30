<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PortfolioData;
use App\Models\Technology;
use App\Models\Project;
use App\Models\Contact;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Portfolio Data
        PortfolioData::create([
            'about_title' => 'About Me',
            'about_description' => 'I am a Backend Developer with 4 years of professional experience, passionate about building scalable, efficient, and reliable web applications. Over the years, I have worked with a wide range of technologies and tools, which allows me to approach projects with flexibility and depth.',
            'experience' => 'I have experience handling complex projects that involve multiple technologies, third-party API integrations, server setups, and ensuring smooth end-to-end functionality. My work is focused on reliability, performance, and clean code architecture.',
        ]);

        // Technologies
        $technologies = [
            ['category' => 'Backend & Server-Side', 'name' => 'PHP', 'order' => 1],
            ['category' => 'Backend & Server-Side', 'name' => 'Laravel', 'order' => 2],
            ['category' => 'Backend & Server-Side', 'name' => 'Node.js', 'order' => 3],
            ['category' => 'Backend & Server-Side', 'name' => 'NestJS', 'order' => 4],
            ['category' => 'Databases', 'name' => 'MySQL', 'order' => 1],
            ['category' => 'APIs', 'name' => 'GraphQL', 'order' => 1],
            ['category' => 'APIs', 'name' => 'REST API', 'order' => 2],
            ['category' => 'Frontend Basics', 'name' => 'HTML', 'order' => 1],
            ['category' => 'Frontend Basics', 'name' => 'CSS', 'order' => 2],
            ['category' => 'Frontend Basics', 'name' => 'JavaScript', 'order' => 3],
            ['category' => 'DevOps & Servers', 'name' => 'Linux (Ubuntu)', 'order' => 1],
            ['category' => 'DevOps & Servers', 'name' => 'Docker', 'order' => 2],
            ['category' => 'DevOps & Servers', 'name' => 'server management', 'order' => 3],
            ['category' => 'Version Control & Collaboration', 'name' => 'Git', 'order' => 1],
            ['category' => 'Version Control & Collaboration', 'name' => 'GitHub', 'order' => 2],
            ['category' => 'Version Control & Collaboration', 'name' => 'GitLab', 'order' => 3],
            ['category' => 'Version Control & Collaboration', 'name' => 'Bitbucket', 'order' => 4],
        ];

        foreach ($technologies as $tech) {
            Technology::create($tech);
        }

        // Projects
        $projects = [
            [
                'name' => 'Armroom.com',
                'description' => 'Worked on backend services and integrations.',
                'order' => 1,
            ],
            [
                'name' => 'PuzzleTrip.com',
                'description' => 'Contributed to the platform\'s backend, APIs, and data handling.',
                'order' => 2,
            ],
            [
                'name' => 'CRMs',
                'description' => 'Developed and maintained multiple customer relationship management systems.',
                'order' => 3,
            ],
            [
                'name' => 'Educational Platform (Diploma Project)',
                'description' => 'Created a full-featured platform with forums, messaging services for students and teachers, allowing users to create and manage their own universities.',
                'order' => 4,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }

        // Contacts
        $contacts = [
            [
                'type' => 'email',
                'label' => 'Email',
                'value' => 'grishkhachatryan@gmail.com',
                'order' => 1,
            ],
            [
                'type' => 'linkedin',
                'label' => 'LinkedIn',
                'value' => 'https://www.linkedin.com/in/grisha-khachatryan-299889195/',
                'order' => 2,
            ],
        ];

        foreach ($contacts as $contact) {
            Contact::create($contact);
        }
    }
}
