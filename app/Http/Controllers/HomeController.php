<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Display the about us page.
     */
    public function about()
    {
        $teamMembers = [
            [
                'name' => 'Sarah Johnson',
                'position' => 'Managing Director & Senior Consultant',
                'experience' => '12+ years',
                'specialties' => ['US Visas', 'Canada PR'],
                'certification' => 'ICCRC Certified',
                'description' => 'ICCRC Certified with 12+ years of experience in immigration law and visa processing.'
            ],
            [
                'name' => 'Michael Chen',
                'position' => 'Senior Immigration Advisor',
                'experience' => '10+ years',
                'specialties' => ['Schengen', 'UK Visas'],
                'certification' => 'European Immigration Specialist',
                'description' => 'Specialized in European visa applications with extensive knowledge of Schengen requirements.'
            ],
            [
                'name' => 'Priya Sharma',
                'position' => 'Documentation Specialist',
                'experience' => '8+ years',
                'specialties' => ['Documents', 'Compliance'],
                'certification' => 'Document Verification Expert',
                'description' => 'Expert in document preparation and verification with meticulous attention to detail.'
            ]
        ];

        $achievements = [
            [
                'title' => '5000+ Visas Processed',
                'description' => 'Successfully processed over 5000 visa applications',
                'icon' => 'fas fa-passport'
            ],
            [
                'title' => '90% Success Rate',
                'description' => 'Maintaining industry-leading success rate',
                'icon' => 'fas fa-chart-line'
            ],
            [
                'title' => '10+ Years Experience',
                'description' => 'Over a decade of immigration expertise',
                'icon' => 'fas fa-calendar-alt'
            ],
            [
                'title' => '50+ Countries',
                'description' => 'Global reach and international expertise',
                'icon' => 'fas fa-globe'
            ]
        ];

        return view('about', compact('teamMembers', 'achievements'));
    }

    /**
     * Display the services page.
     */
    public function services()
    {
        $visaCategories = [
            'us' => [
                'name' => 'United States Visas',
                'description' => 'Tourist, Business, Student, and Work Visas',
                'icon' => 'fas fa-flag-usa',
                'color' => 'blue',
                'services' => [
                    ['name' => 'B1/B2 Tourist', 'description' => 'Tourism and business visits', 'price' => '£299', 'icon' => 'fas fa-plane'],
                    ['name' => 'F1 Student', 'description' => 'Academic studies', 'price' => '£499', 'icon' => 'fas fa-graduation-cap'],
                    ['name' => 'H1B Work', 'description' => 'Specialty occupations', 'price' => '£799', 'icon' => 'fas fa-briefcase'],
                    ['name' => 'K1 Fiancé', 'description' => 'Marriage-based visas', 'price' => '£699', 'icon' => 'fas fa-heart']
                ]
            ],
            'canada' => [
                'name' => 'Canada Visas',
                'description' => 'Visitor, Study, Work, and Permanent Residence',
                'icon' => 'fas fa-maple-leaf',
                'color' => 'red',
                'services' => [
                    ['name' => 'Visitor Visa', 'description' => 'Tourism and family visits', 'price' => '£199', 'icon' => 'fas fa-passport'],
                    ['name' => 'Study Permit', 'description' => 'Educational programs', 'price' => '£399', 'icon' => 'fas fa-university'],
                    ['name' => 'Work Permit', 'description' => 'Employment opportunities', 'price' => '£599', 'icon' => 'fas fa-tools'],
                    ['name' => 'Express Entry', 'description' => 'Permanent residence', 'price' => '£999', 'icon' => 'fas fa-home']
                ]
            ],
            'schengen' => [
                'name' => 'Schengen Visas',
                'description' => 'Access to 26 European Countries',
                'icon' => 'fas fa-star',
                'color' => 'yellow',
                'services' => [
                    ['name' => 'Tourist Visa', 'description' => 'Leisure and sightseeing', 'price' => '£149', 'icon' => 'fas fa-camera'],
                    ['name' => 'Business Visa', 'description' => 'Meetings and conferences', 'price' => '£199', 'icon' => 'fas fa-handshake'],
                    ['name' => 'Family Visit', 'description' => 'Visiting relatives', 'price' => '£179', 'icon' => 'fas fa-users'],
                    ['name' => 'Medical Visa', 'description' => 'Medical treatment', 'price' => '£249', 'icon' => 'fas fa-stethoscope']
                ]
            ],
            'uk' => [
                'name' => 'United Kingdom Visas',
                'description' => 'Visit, Study, Work, and Settlement',
                'icon' => 'fas fa-crown',
                'color' => 'purple',
                'services' => [
                    ['name' => 'Standard Visitor', 'description' => 'Tourism and business', 'price' => '£199', 'icon' => 'fas fa-suitcase'],
                    ['name' => 'Student Visa', 'description' => 'Academic courses', 'price' => '£399', 'icon' => 'fas fa-book'],
                    ['name' => 'Skilled Worker', 'description' => 'Employment-based', 'price' => '£699', 'icon' => 'fas fa-id-card'],
                    ['name' => 'Spouse Visa', 'description' => 'Family reunification', 'price' => '£799', 'icon' => 'fas fa-ring']
                ]
            ]
        ];

        $servicePackages = [
            'basic' => [
                'name' => 'Basic Package',
                'price' => '£199',
                'description' => 'Perfect for straightforward applications',
                'features' => [
                    'Initial consultation',
                    'Document checklist',
                    'Application review',
                    'Email support'
                ],
                'popular' => false
            ],
            'premium' => [
                'name' => 'Premium Package',
                'price' => '£399',
                'description' => 'Comprehensive support and guidance',
                'features' => [
                    'Everything in Basic',
                    'Document preparation',
                    'Interview preparation',
                    'Phone support',
                    'Application tracking'
                ],
                'popular' => true
            ],
            'vip' => [
                'name' => 'VIP Package',
                'price' => '£699',
                'description' => 'Complete white-glove service',
                'features' => [
                    'Everything in Premium',
                    'Dedicated consultant',
                    'Priority processing',
                    '24/7 support',
                    'Post-approval assistance'
                ],
                'popular' => false
            ]
        ];

        return view('services', compact('visaCategories', 'servicePackages'));
    }

    /**
     * Display the visa information page.
     */
    public function visaInformation()
    {
        $visaTypes = [
            'usa' => [
                'name' => 'United States Visas',
                'icon' => 'fas fa-flag-usa',
                'color' => 'blue',
                'types' => [
                    'b1_b2' => [
                        'name' => 'B1/B2 Tourist Visa',
                        'purpose' => 'Tourism and Business Visits',
                        'icon' => 'fas fa-plane',
                        'processing_time' => '3-5 weeks',
                        'validity' => 'Up to 10 years',
                        'purposes' => [
                            'Tourism and sightseeing',
                            'Business meetings and conferences',
                            'Visiting friends and family',
                            'Medical treatment'
                        ],
                        'requirements' => [
                            'Valid passport (6+ months validity)',
                            'DS-160 form completion',
                            'Visa interview appointment',
                            'Financial proof ($10,000+ recommended)',
                            'Strong ties to home country'
                        ]
                    ],
                    'f1' => [
                        'name' => 'F1 Student Visa',
                        'purpose' => 'Academic Studies',
                        'icon' => 'fas fa-graduation-cap',
                        'processing_time' => '2-8 weeks',
                        'validity' => 'Duration of studies',
                        'purposes' => [
                            'Full-time academic studies',
                            'University and college programs',
                            'Language training programs',
                            'Optional Practical Training (OPT)'
                        ],
                        'requirements' => [
                            'I-20 form from SEVP-approved school',
                            'SEVIS fee payment ($350)',
                            'Academic transcripts and diplomas',
                            'English proficiency test scores',
                            'Financial support documentation'
                        ]
                    ]
                ]
            ],
            'canada' => [
                'name' => 'Canada Visas',
                'icon' => 'fas fa-maple-leaf',
                'color' => 'red',
                'types' => [
                    'visitor' => [
                        'name' => 'Visitor Visa (TRV)',
                        'purpose' => 'Tourism and Family Visits',
                        'icon' => 'fas fa-passport',
                        'processing_time' => '2-4 weeks',
                        'validity' => 'Up to 10 years',
                        'purposes' => [
                            'Tourism and leisure travel',
                            'Visiting family and friends',
                            'Business meetings (short-term)',
                            'Transit through Canada'
                        ],
                        'requirements' => [
                            'Valid passport',
                            'Completed application form',
                            'Proof of financial support',
                            'Letter of invitation (if applicable)',
                            'Travel itinerary'
                        ]
                    ],
                    'study' => [
                        'name' => 'Study Permit',
                        'purpose' => 'Educational Programs',
                        'icon' => 'fas fa-university',
                        'processing_time' => '4-12 weeks',
                        'validity' => 'Duration of studies',
                        'purposes' => [
                            'Full-time studies at DLI institutions',
                            'University and college programs',
                            'Post-graduation work opportunities',
                            'Pathway to permanent residence'
                        ],
                        'requirements' => [
                            'Letter of acceptance from DLI',
                            'Proof of financial support',
                            'Medical examination (if required)',
                            'Statement of purpose',
                            'Language proficiency scores'
                        ]
                    ]
                ]
            ]
        ];

        $generalRequirements = [
            'essential' => [
                'title' => 'Essential Documents',
                'icon' => 'fas fa-file-alt',
                'color' => 'blue',
                'items' => [
                    'Valid passport (6+ months validity)',
                    'Completed visa application form',
                    'Recent passport-sized photographs',
                    'Travel itinerary and bookings',
                    'Proof of accommodation',
                    'Travel insurance (where required)'
                ]
            ],
            'financial' => [
                'title' => 'Financial Requirements',
                'icon' => 'fas fa-money-bill-wave',
                'color' => 'green',
                'items' => [
                    'Bank statements (3-6 months)',
                    'Proof of income/employment',
                    'Sponsorship letters (if applicable)',
                    'Tax returns and financial records',
                    'Proof of funds for travel expenses',
                    'Property ownership documents'
                ]
            ],
            'supporting' => [
                'title' => 'Supporting Documents',
                'icon' => 'fas fa-clipboard-check',
                'color' => 'purple',
                'items' => [
                    'Invitation letters (if visiting)',
                    'Employment verification letter',
                    'Educational certificates',
                    'Medical examination reports',
                    'Police clearance certificates',
                    'Marriage/birth certificates'
                ]
            ]
        ];

        return view('visa-information', compact('visaTypes', 'generalRequirements'));
    }

    /**
     * Display the apply now page.
     */
    public function applyNow()
    {
        $visaTypes = [
            'usa' => [
                'name' => 'United States',
                'types' => ['Tourist/Visitor', 'Business', 'Student', 'Work', 'Family/Spouse', 'Transit']
            ],
            'canada' => [
                'name' => 'Canada',
                'types' => ['Visitor', 'Study Permit', 'Work Permit', 'Family Class', 'Transit']
            ],
            'schengen' => [
                'name' => 'Schengen Area',
                'types' => ['Tourist', 'Business', 'Student', 'Work', 'Family Visit', 'Transit']
            ],
            'uk' => [
                'name' => 'United Kingdom',
                'types' => ['Standard Visitor', 'Student', 'Work', 'Family', 'Transit']
            ],
            'australia' => [
                'name' => 'Australia',
                'types' => ['Tourist', 'Business', 'Student', 'Work', 'Family', 'Transit']
            ]
        ];

        $applicationSteps = [
            [
                'step' => '1',
                'title' => 'Choose Visa Type',
                'description' => 'Select your destination and visa category',
                'icon' => 'fas fa-map-marked-alt',
                'color' => 'blue'
            ],
            [
                'step' => '2',
                'title' => 'Fill Application',
                'description' => 'Complete the comprehensive application form',
                'icon' => 'fas fa-edit',
                'color' => 'green'
            ],
            [
                'step' => '3',
                'title' => 'Upload Documents',
                'description' => 'Submit required documents securely',
                'icon' => 'fas fa-cloud-upload-alt',
                'color' => 'purple'
            ],
            [
                'step' => '4',
                'title' => 'Expert Review',
                'description' => 'Our team reviews and processes your application',
                'icon' => 'fas fa-user-check',
                'color' => 'orange'
            ]
        ];

        return view('apply-now', compact('visaTypes', 'applicationSteps'));
    }

    /**
     * Display the testimonials page.
     */
    public function testimonials()
    {
        $featuredTestimonials = [
            [
                'name' => 'Sarah Johnson',
                'visa_type' => 'US Tourist Visa',
                'review' => 'Exceptional service! The team at Nathapam Global made my US visa application seamless. Their attention to detail and professional guidance helped me get approved on my first attempt. Highly recommended!',
                'location' => 'London, UK',
                'date' => 'March 2024',
                'color' => 'blue',
                'flag' => 'fas fa-flag-usa'
            ],
            [
                'name' => 'Ahmed Hassan',
                'visa_type' => 'Canada Study Permit',
                'review' => 'I was worried about my study permit application, but Nathapam Global guided me through every step. Their expertise in Canadian immigration law is outstanding. I got my visa in just 4 weeks!',
                'location' => 'Dubai, UAE',
                'date' => 'February 2024',
                'color' => 'red',
                'flag' => 'fas fa-maple-leaf'
            ],
            [
                'name' => 'Maria Rodriguez',
                'visa_type' => 'Schengen Tourist Visa',
                'review' => 'Professional, efficient, and reliable! The team helped me secure my Schengen visa for my European tour. The process was smooth and stress-free. Thank you for making my dream trip possible!',
                'location' => 'Madrid, Spain',
                'date' => 'January 2024',
                'color' => 'purple',
                'flag' => 'fas fa-star'
            ]
        ];

        $testimonialsByCountry = [
            'usa' => [
                [
                    'name' => 'David Chen',
                    'visa_type' => 'B1/B2 Business Visa',
                    'review' => 'Outstanding service from start to finish. The team prepared all my documents perfectly and coached me for the interview. Got my 10-year visa approved!',
                    'location' => 'Singapore',
                    'date' => 'March 2024',
                    'rating' => 5,
                    'processing_time' => '3 weeks'
                ],
                [
                    'name' => 'Jennifer Smith',
                    'visa_type' => 'F1 Student Visa',
                    'review' => 'I was nervous about my student visa application, but the consultants at Nathapam Global were incredibly supportive. They helped me prepare all documents and practice for the interview.',
                    'location' => 'Manchester, UK',
                    'date' => 'February 2024',
                    'rating' => 5,
                    'processing_time' => '5 weeks'
                ],
                [
                    'name' => 'Robert Wilson',
                    'visa_type' => 'H1B Work Visa',
                    'review' => 'Complex work visa application made simple. The team handled all the paperwork and kept me updated throughout the process. Excellent communication and results.',
                    'location' => 'Toronto, Canada',
                    'date' => 'January 2024',
                    'rating' => 5,
                    'processing_time' => '8 weeks'
                ],
                [
                    'name' => 'Lisa Thompson',
                    'visa_type' => 'Tourist Visa',
                    'review' => 'Quick and professional service. I needed my visa urgently for a family emergency, and they expedited the process. Very grateful for their help.',
                    'location' => 'Sydney, Australia',
                    'date' => 'December 2023',
                    'rating' => 5,
                    'processing_time' => '2 weeks'
                ]
            ],
            'canada' => [
                [
                    'name' => 'Priya Patel',
                    'visa_type' => 'Study Permit',
                    'review' => 'Excellent guidance throughout my study permit application. The team was knowledgeable about the latest requirements and helped me avoid common mistakes.',
                    'location' => 'Mumbai, India',
                    'date' => 'March 2024',
                    'rating' => 5,
                    'processing_time' => '6 weeks'
                ],
                [
                    'name' => 'Michael Brown',
                    'visa_type' => 'Work Permit',
                    'review' => 'Professional and efficient service. They handled my work permit application with great attention to detail. The process was smooth and transparent.',
                    'location' => 'Dublin, Ireland',
                    'date' => 'February 2024',
                    'rating' => 5,
                    'processing_time' => '10 weeks'
                ],
                [
                    'name' => 'Anna Kowalski',
                    'visa_type' => 'Visitor Visa',
                    'review' => 'I had a previous visa refusal, but Nathapam Global helped me understand what went wrong and prepared a strong application. This time I got approved!',
                    'location' => 'Warsaw, Poland',
                    'date' => 'January 2024',
                    'rating' => 5,
                    'processing_time' => '4 weeks'
                ],
                [
                    'name' => 'James Miller',
                    'visa_type' => 'Family Class Visa',
                    'review' => 'Reuniting with my family in Canada seemed impossible until I found Nathapam Global. Their expertise in family immigration made all the difference.',
                    'location' => 'Lagos, Nigeria',
                    'date' => 'December 2023',
                    'rating' => 5,
                    'processing_time' => '12 weeks'
                ]
            ],
            'schengen' => [
                [
                    'name' => 'Elena Popov',
                    'visa_type' => 'Tourist Visa',
                    'review' => 'Perfect service for my European vacation. They knew exactly which documents were needed and helped me present my case effectively. Visa approved in 2 weeks!',
                    'location' => 'Moscow, Russia',
                    'date' => 'March 2024',
                    'rating' => 5,
                    'processing_time' => '2 weeks'
                ],
                [
                    'name' => 'Carlos Santos',
                    'visa_type' => 'Business Visa',
                    'review' => 'Needed a Schengen visa for business meetings across Europe. The team understood my requirements and prepared all documents perfectly. Highly professional!',
                    'location' => 'São Paulo, Brazil',
                    'date' => 'February 2024',
                    'rating' => 5,
                    'processing_time' => '3 weeks'
                ],
                [
                    'name' => 'Fatima Al-Zahra',
                    'visa_type' => 'Student Visa',
                    'review' => 'Studying in Germany was my dream, and Nathapam Global made it reality. They guided me through the complex student visa process with patience and expertise.',
                    'location' => 'Cairo, Egypt',
                    'date' => 'January 2024',
                    'rating' => 5,
                    'processing_time' => '4 weeks'
                ],
                [
                    'name' => 'John Anderson',
                    'visa_type' => 'Family Visit Visa',
                    'review' => 'Visiting my daughter in France required careful documentation. The team ensured everything was perfect, and I got my visa without any issues.',
                    'location' => 'Cape Town, South Africa',
                    'date' => 'December 2023',
                    'rating' => 5,
                    'processing_time' => '3 weeks'
                ]
            ],
            'uk' => [
                [
                    'name' => 'Raj Kumar',
                    'visa_type' => 'Standard Visitor Visa',
                    'review' => 'Excellent service for my UK visitor visa. The team was thorough in their approach and made sure all requirements were met. Got approved on first attempt!',
                    'location' => 'Delhi, India',
                    'date' => 'March 2024',
                    'rating' => 5,
                    'processing_time' => '3 weeks'
                ],
                [
                    'name' => 'Sophie Martin',
                    'visa_type' => 'Student Visa',
                    'review' => 'Pursuing my Masters in the UK was made possible by Nathapam Global. Their knowledge of UK immigration rules is exceptional. Thank you for your support!',
                    'location' => 'Paris, France',
                    'date' => 'February 2024',
                    'rating' => 5,
                    'processing_time' => '6 weeks'
                ],
                [
                    'name' => 'Ahmed Ali',
                    'visa_type' => 'Work Visa',
                    'review' => 'Complex work visa application handled with expertise. The team kept me informed at every step and ensured all documents were properly prepared.',
                    'location' => 'Karachi, Pakistan',
                    'date' => 'January 2024',
                    'rating' => 5,
                    'processing_time' => '8 weeks'
                ],
                [
                    'name' => 'Grace Okafor',
                    'visa_type' => 'Family Visa',
                    'review' => 'Joining my husband in London was a dream come true. Nathapam Global made the family visa process straightforward and stress-free.',
                    'location' => 'Abuja, Nigeria',
                    'date' => 'December 2023',
                    'rating' => 5,
                    'processing_time' => '10 weeks'
                ]
            ]
        ];

        $videoTestimonials = [
            [
                'name' => 'Mark Johnson',
                'visa_type' => 'US Business Visa',
                'country' => 'United States',
                'duration' => '2:15',
                'preview' => 'Mark shares his experience getting a US business visa for his startup expansion.'
            ],
            [
                'name' => 'Aisha Rahman',
                'visa_type' => 'Canada Study Permit',
                'country' => 'Canada',
                'duration' => '1:45',
                'preview' => 'Aisha talks about her journey to study in Canada and how we helped her succeed.'
            ],
            [
                'name' => 'Giuseppe Romano',
                'visa_type' => 'Schengen Tourist Visa',
                'country' => 'Europe',
                'duration' => '1:30',
                'preview' => 'Giuseppe describes his European vacation and the smooth visa process.'
            ]
        ];

        return view('testimonials', compact('featuredTestimonials', 'testimonialsByCountry', 'videoTestimonials'));
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        $contactInfo = [
            'office' => [
                'address' => '2 Haydock Avenue, Hereford, Herefordshire, HR4 9LZ, United Kingdom',
                'phone_main' => '+44 7432 404 502',
                'phone_whatsapp' => '+44 7432 404 502',
                'email_general' => 'info@nathampamglobal.co.uk',
                'email_support' => 'nathapamquadrupleo@gmail.com',
                'email_urgent' => 'anuoluwamercy28@gmail.com'
            ],
            'hours' => [
                'monday_friday' => '9:00 AM - 6:00 PM',
                'saturday' => '10:00 AM - 2:00 PM',
                'sunday' => 'Closed'
            ]
        ];

        $faqs = [
            [
                'question' => 'How long does the visa application process take?',
                'answer' => 'Processing times vary by visa type and country. Tourist visas typically take 5-15 business days, while work and study visas can take 2-8 weeks. We provide estimated timelines during consultation.'
            ],
            [
                'question' => 'What documents do I need for my visa application?',
                'answer' => 'Required documents vary by visa type but typically include passport, photos, financial statements, invitation letters, and supporting documents. We provide a comprehensive checklist after consultation.'
            ],
            [
                'question' => 'Do you offer refunds if my visa is rejected?',
                'answer' => 'Our service fees are non-refundable as they cover professional consultation and application preparation. However, we offer free reapplication assistance if rejection was due to our error.'
            ],
            [
                'question' => 'Can you help with visa interviews?',
                'answer' => 'Yes! Our Premium and VIP packages include comprehensive interview preparation, including mock interviews, question practice, and confidence-building sessions.'
            ]
        ];

        return view('contact', compact('contactInfo', 'faqs'));
    }

    /**
     * Display the FAQ page.
     */
    public function faq()
    {
        $generalFaqs = [
            [
                'question' => 'What is a visa and why do I need one?',
                'answer' => 'A visa is an official document that allows you to enter, stay, or transit through a foreign country for a specific purpose and duration. Most countries require visas for foreign nationals to ensure proper documentation and security.'
            ],
            [
                'question' => 'Which countries can I visit with my current passport?',
                'answer' => 'Visa requirements depend on your nationality and destination country. We provide personalized consultation to determine which countries you can visit visa-free and which require advance visa applications.'
            ],
            [
                'question' => 'How do I know which type of visa I need?',
                'answer' => 'Visa type depends on your purpose of travel (tourism, business, study, work, family visit). During our consultation, we assess your travel plans and recommend the most appropriate visa category.'
            ],
            [
                'question' => 'Can I apply for multiple visas at the same time?',
                'answer' => 'Yes, you can apply for multiple visas simultaneously, but some countries may require you to submit your passport for processing. We help coordinate multiple applications to minimize delays.'
            ],
            [
                'question' => 'What happens if my visa application is rejected?',
                'answer' => 'Visa rejections can occur for various reasons. We analyze rejection letters, identify issues, and help you reapply with improved documentation. Our success rate for reapplications is over 85%.'
            ]
        ];

        $applicationFaqs = [
            [
                'question' => 'How do I start my visa application process?',
                'answer' => 'Start by booking a consultation with our experts. We assess your eligibility, recommend the best visa type, provide a document checklist, and guide you through each step of the application process.'
            ],
            [
                'question' => 'Can I apply for a visa online?',
                'answer' => 'Many countries offer online visa applications (e-visas). We handle both online and embassy applications, ensuring all forms are completed accurately and submitted with proper supporting documents.'
            ],
            [
                'question' => 'Do I need to visit the embassy in person?',
                'answer' => 'Some visa applications require in-person visits for biometric data collection or interviews. We prepare you for embassy visits and can accompany you when permitted.'
            ],
            [
                'question' => 'Can someone else submit my visa application on my behalf?',
                'answer' => 'In most cases, visa applications must be submitted by the applicant personally. However, some countries allow authorized representatives. We clarify requirements for each specific case.'
            ],
            [
                'question' => 'What if I make a mistake on my application form?',
                'answer' => 'Errors on visa applications can lead to delays or rejections. Our experts review all forms before submission to ensure accuracy. If errors are discovered after submission, we help with corrections or resubmission.'
            ]
        ];

        $documentFaqs = [
            [
                'question' => 'What documents are required for a tourist visa?',
                'answer' => 'Tourist visa requirements typically include: valid passport, completed application form, passport photos, flight itinerary, hotel bookings, bank statements, employment letter, and travel insurance. Specific requirements vary by destination.'
            ],
            [
                'question' => 'How recent should my bank statements be?',
                'answer' => 'Most embassies require bank statements from the last 3-6 months, dated within 30 days of application submission. Statements should show consistent income and sufficient funds for your trip.'
            ],
            [
                'question' => 'Do I need travel insurance for my visa application?',
                'answer' => 'Many countries, especially Schengen nations, require travel insurance with minimum coverage (usually €30,000 for medical expenses). We help you obtain appropriate insurance that meets visa requirements.'
            ],
            [
                'question' => 'Can I use photocopies of documents?',
                'answer' => 'Most embassies require original documents for verification, along with photocopies for their records. We advise on which documents need originals and help organize your documentation properly.'
            ],
            [
                'question' => 'What if I don\'t have all required documents?',
                'answer' => 'Missing documents can delay or result in visa rejection. We help identify alternative documents or provide guidance on obtaining missing paperwork before application submission.'
            ],
            [
                'question' => 'How should documents be translated and certified?',
                'answer' => 'Documents in languages other than English often require certified translations. We work with certified translators and help with document legalization or apostille when required.'
            ]
        ];

        $processingFaqs = [
            [
                'question' => 'How long does visa processing take?',
                'answer' => 'Processing times vary: Tourist visas (5-15 business days), Business visas (10-20 business days), Student visas (2-8 weeks), Work visas (4-12 weeks). We provide accurate timelines based on current embassy processing times.'
            ],
            [
                'question' => 'Can I track my visa application status?',
                'answer' => 'Most embassies provide online tracking systems. We help you set up tracking and monitor your application status, providing regular updates throughout the process.'
            ],
            [
                'question' => 'What is expedited or urgent processing?',
                'answer' => 'Some embassies offer expedited processing for additional fees, reducing processing time by 50-70%. We assess your urgency and help with expedited applications when available.'
            ],
            [
                'question' => 'Can I travel while my visa application is being processed?',
                'answer' => 'If your passport is with the embassy, you cannot travel internationally. We advise on timing your application to avoid conflicts with planned travel and help with emergency situations.'
            ],
            [
                'question' => 'What happens after my visa is approved?',
                'answer' => 'Once approved, you can collect your passport with the visa stamp. We verify visa details for accuracy and provide guidance on entry requirements and travel preparations.'
            ],
            [
                'question' => 'How long is my visa valid?',
                'answer' => 'Visa validity varies by type and country. Tourist visas are typically valid for 3-6 months with stays of 30-90 days. We explain your specific visa conditions and help plan your travel accordingly.'
            ]
        ];

        return view('faq', compact('generalFaqs', 'applicationFaqs', 'documentFaqs', 'processingFaqs'));
    }
}