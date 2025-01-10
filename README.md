# Kuliner Nusantara - Website with Spotify Theme

## Project Overview

Kuliner Nusantara is a web application designed to showcase traditional Indonesian cuisine, featuring both food and beverages. The project adopts a Spotify-inspired design theme, creating a modern and engaging user experience while exploring the rich culinary heritage of Indonesia.

## Features

- **Responsive Design**: Adapts seamlessly to various screen sizes and devices.
- **Dynamic Content**: Displays food and beverage items fetched from a MySQL database.
- **CRUD Functionality**: Allows adding, viewing, updating, and deleting culinary items.
- **Spotify-Inspired UI**: Dark mode interface with green accents and sleek animations.
- **Search and Filter**: Enables users to easily find specific dishes or drinks.
- **Contact Form**: Allows visitors to send inquiries or feedback.

## Pages

### 1. Home (home.php)

The landing page showcases featured content and provides an overview of the website's offerings.

#### Key Elements:

- Hero section with a gradient background
- Featured food and beverage sections
- Responsive grid layout for content display
- Hover effects on content cards

#### Styling Highlights:

- Gradient text effect for the main title
- Custom scrollbar styling
- Animated background for visual appeal

### 2. About (about.php)

Provides information about the website's mission and the team behind it.

#### Key Elements:

- Vision and mission statements
- Team member profiles
- Gradient background with blur effect

#### Styling Highlights:

- Card design for team members with hover effects
- Animated title with glow effect
- Responsive layout for various screen sizes

### 3. Contact (contact.php)

Allows users to get in touch with the Kuliner Nusantara team.

#### Key Elements:

- Contact form with input validation
- Contact information display
- Social media links

#### Styling Highlights:

- Glassmorphism effect on the contact form
- Interactive form elements with focus states
- Responsive split layout for form and contact info

### 4. 404 Error (404.php)

Custom error page for handling not found errors.

#### Key Elements:

- Creative error message related to culinary theme
- Button to return to the home page

#### Styling Highlights:

- Large, eye-catching 404 text with shadow effect
- Animated background
- Responsive design for all devices

### 5. Food View (makananview.php)

Displays a grid of traditional Indonesian dishes.

#### Key Elements:

- Grid layout of food items
- Add, edit, and delete functionality
- Pagination or infinite scroll

#### Styling Highlights:

- Card design with hover effects
- Lazy loading for images
- Smooth animations on card interactions

### 6. Add Food (makananadd.php)

Form to add new traditional dishes to the database.

#### Key Elements:

- Input fields for dish name and origin
- Form validation
- Submit and cancel buttons

#### Styling Highlights:

- Floating label effect on input fields
- Gradient submit button
- Responsive form layout

### 7. Update Food (makananupdate.php)

Allows editing of existing food entries.

#### Key Elements:

- Pre-filled form with existing data
- Update and cancel buttons
- Form validation

#### Styling Highlights:

- Similar styling to Add Food page for consistency
- Visual feedback on form interaction

### 8. Beverage View (minumanview.php)

Similar to Food View, but for traditional Indonesian beverages.

#### Key Elements:

- Grid layout of beverage items
- CRUD functionality
- Search and filter options

#### Styling Highlights:

- Consistent card design with Food View
- Smooth transitions on grid updates

### 9. Add Beverage (minumanadd.php)

Form to add new traditional beverages to the database.

#### Key Elements:

- Input fields for beverage name and origin
- Form validation
- Submit and cancel buttons

#### Styling Highlights:

- Consistent with Add Food page
- Animated form submission feedback

### 10. Update Beverage (minumanupdate.php)

Allows editing of existing beverage entries.

#### Key Elements:

- Pre-filled form with existing data
- Update and cancel buttons
- Form validation

#### Styling Highlights:

- Matches Update Food page for consistency
- Smooth transitions on form state changes

## Technical Details

### Frontend

- HTML5
- CSS3 with custom properties for theming
- Vanilla JavaScript for interactivity
- Responsive design using Flexbox and CSS Grid

### Backend

- PHP for server-side logic
- MySQL database for data storage
- PDO for database connections (recommended upgrade from mysqli)

### Performance Optimizations

- Lazy loading of images
- Minified CSS and JavaScript
- Optimized database queries

### Security Measures

- Input sanitization to prevent XSS attacks
- Prepared statements to prevent SQL injection
- CSRF protection on forms

## Setup and Installation

1. Clone the repository to your local machine or server.
2. Import the provided SQL file to set up the database structure.
3. Configure the database connection in `includes/config.php`.
4. Ensure your web server supports PHP and has the necessary extensions enabled.
5. Access the website through your web server's URL.

## Future Enhancements

- User authentication system
- Advanced search functionality
- Recipe pages for each dish and beverage
- User ratings and reviews
- Integration with social media platforms

## Contributing

Contributions to Kuliner Nusantara are welcome. Please ensure to follow the existing code style and submit pull requests for any new features or bug fixes.

## License

This project is open-source and available under the MIT License.

---

Developed with ❤️ by the Kuliner Nusantara Team
