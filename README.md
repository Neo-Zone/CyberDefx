# CyberDefX

CyberDefX is an advanced web application tool tailored for network architects, penetration testers, cybersecurity professionals, and more. Designed to assist in various areas including network security, data safety, forensics, and cryptography, CyberDefX is your comprehensive solution for navigating the complexities of cybersecurity.



![CyberDefX Screenshot](https://github.com/Neo-Zone/CyberDefx/blob/main/Screenshot%202024-06-07%20184005.png)
## Installation

### Prerequisites

Ensure you have the following software installed on your local development machine:

- PHP >= 7.4
- Composer
- Node.js & npm
- MySQL or any other database supported by Laravel

### Steps

1. **Clone the repository**:
   ```bash
   git clone https://github.com/your-username/CyberDefX.git
2. **Navigate to the project directory**:
   ```bash
   cd CyberDefX
3. **Install PHP dependencies & Javascript dependencies**:
   ```bash
   composer install & npm install
4. **Set up environment variables**:
   ```bash
     cp .env.example .env
5. **Generate application key**:
   ```bash
   php artisan key:generate
6. **Run database migration**:
   ```bash
   php artisan migrate
7. **Optional Seed the database (if you have seeders configured)**:
   ```bash
   php artisan db:seed
8. **Compile front-end assets**:
   ```bash
   npm run dev
9. **Start the development server**:
   ```bash
   php artisan serve
   
11.Access the application:
Open your web browser and go to http://localhost:8000

## Features

1. **Client Management**:
   - Set up profiles, post jobs, and hire freelancers based on job bids.
   - Edit and manage job postings with ease.
   - Monitor the status of hired freelancers.
  ![CyberDefX Screenshot](https://github.com/Neo-Zone/CyberDefx/blob/main/client%20hire.png)
  ![CyberDefX Screenshot](https://github.com/Neo-Zone/CyberDefx/blob/main/client%20hired%20jobs.png)
  ![CyberDefX Screenshot](https://github.com/Neo-Zone/CyberDefx/blob/main/post%20the%20job.png)



2. **Freelancer Management**:
   - Create profiles and search for jobs using filters.
   - Place bids on available jobs.
    ![CyberDefX Screenshot](https://github.com/Neo-Zone/CyberDefx/blob/main/bid.png)
    ![CyberDefX Screenshot]( https://github.com/Neo-Zone/CyberDefx/blob/main/filter.png)

3. **Reviews**:
   - Both freelancers and clients can leave reviews upon job completion.
   - Reviews are displayed on respective profiles.

    ![CyberDefX Screenshot](https://github.com/Neo-Zone/CyberDefx/blob/main/review.png)
    ![CyberDefX Screenshot]( https://github.com/Neo-Zone/CyberDefx/blob/main/profile%20and%20review.png)
 
   
4. **Communication**:
   - Integrated chat options for freelancers and clients.
     ![CyberDefX Screenshot](https://github.com/Neo-Zone/CyberDefx/blob/main/chat.png)

5. **Payments**:
   - Clients have a secure payment option for job completion.
  
     ![CyberDefX Screenshot](https://github.com/Neo-Zone/CyberDefx/blob/main/1stripe.png)

## Usage

1. **Register as a client or freelancer**:
   - Sign up on the platform as either a client or a freelancer.

2. **Set up your profile**:
   - Fill in your profile details to start using the platform.

3. **Clients can post jobs and hire freelancers**:
   - Clients can create job postings and hire freelancers based on their bids.

4. **Freelancers can bid on jobs and complete them**:
   - Freelancers can browse job postings, place bids, and complete jobs.

5. **Use the chat feature to communicate**:
   - Both clients and freelancers can use the integrated chat feature to communicate.

6. **Clients can securely pay freelancers after job completion**:
   - Clients can make payments to freelancers upon job completion through the secure payment system.

## Contributing

We welcome contributions from the community! To contribute to CyberDefX, follow these steps:

1. Fork the repository on GitHub.
2. Create a new branch from the `main` branch:
   ```bash
   git checkout -b your-branch-name

