# Visitor Log PHP Script

This PHP script captures visitor log information and stores it in a database table. It records details such as page URL, referrer URL, user IP address, user agent, and time spent on the page.

## How it works

1. **Session Check**: Checks if the user is logged in by verifying the existence of the `sesEmail` session variable. If logged in, it retrieves the user ID from the session variable `sesUserId`.

2. **Time Tracking**: Calculates the time spent on the current page by comparing the current time with the start time stored in the session.

3. **URL and Server Information**: Retrieves the current page URL, user IP address, referrer URL, and user agent.

4. **Database Insertion**: Inserts the visitor log information into the database table `logs`, including page URL, referrer URL, user IP address, user agent, user ID (if available), and time spent on the page.

5. **Session Update**: Updates the start time stored in the session to track time spent on subsequent page views.


## Author

This HTML code was authored by [Kajal Bhammar](https://github.com/KajalBhammar).
