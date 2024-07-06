# Medixi Medical Website

This project is a medical website built using PHP, designed to run on a XAMPP server. The website provides various health-related articles, appointment booking pages, and other medical information.

## Features

- Informative health-related articles
- Appointment booking system
- User-friendly interface

## Getting Started

### Prerequisites

Before you begin, ensure you have the following installed on your machine:

- XAMPP Server

### Installation

1. **Install XAMPP Server:**

    Download and install XAMPP from the [official website](https://www.apachefriends.org/index.html).

2. **Clone the repository:**

    ```sh
    git clone https://github.com/VijayKumar9263/MEDIXI-MEDICAL-WEBSITE.git
    ```

3. **Move the source code to XAMPP's `htdocs` folder:**

    ```sh
    mv MEDIXI-MEDICAL-WEBSITE /path_to_xampp/htdocs/
    ```

4. **Start Apache and MySQL Server using XAMPP Control Panel:**

    Open the XAMPP Control Panel and start the Apache and MySQL services.

5. **Create the database:**

    - Open your web browser and go to `http://localhost/phpmyadmin`.
    - Create a new database named `appointment_db`.
    - Create two table in the database named as `appointments` & `users` having this details in in :-
      
    **appointments:-**
     ![image](https://github.com/VijayKumar9263/MEDIXI-MEDICAL-WEBSITE/assets/134833144/4454b58e-92db-4f52-b199-c46fd576be24)
    **users:-**
     ![image](https://github.com/VijayKumar9263/MEDIXI-MEDICAL-WEBSITE/assets/134833144/a04912dd-7a03-475a-a796-03e23d1715c4)

7. **Configure the database connection:**

    Ensure your PHP files are configured to connect to the `medixi_db` database. Update the database configuration in the `connect.php` file or equivalent.

### Running the Application

1. Open your web browser and go to `http://localhost/MEDIXI-MEDICAL-WEBSITE`.
2. The website should now be accessible and fully functional.

## Screenshots

### Homepage
![image](https://github.com/VijayKumar9263/MEDIXI-MEDICAL-WEBSITE/assets/134833144/2089d1d2-af30-4c52-978c-110bf76b5104)

### Articles Page
![image](https://github.com/VijayKumar9263/MEDIXI-MEDICAL-WEBSITE/assets/134833144/e79c26ce-2f72-4ab8-ba6d-a28625bf3260)

### Appointment Booking
![image](https://github.com/VijayKumar9263/MEDIXI-MEDICAL-WEBSITE/assets/134833144/eb271f0d-aa56-464a-8230-3612b90277f1)

### User Dashboard
![image](https://github.com/VijayKumar9263/MEDIXI-MEDICAL-WEBSITE/assets/134833144/28c67e8b-c9ad-4d2b-b6d8-c2ccc57607c4)


## Contributing

1. Fork the repository.
2. Create a new branch: `git checkout -b feature-branch`.
3. Make your changes and commit them: `git commit -m 'Add some feature'`.
4. Push to the branch: `git push origin feature-branch`.
5. Submit a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- Inspiration from various medical websites.
- Thanks to the open-source community for their valuable resources.
