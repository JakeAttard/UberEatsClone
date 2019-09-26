@extends('layouts.app')

@section('title')
    Documentation
@endsection

@section('content')
    <div class="documentationTitle">
        <h3>Documentation</h3>
    </div>

    <div class="postNowPosts">
        <strong><p>The Uber Eats Clone website satisfied the following requirements:</p></strong>
        <p>1. Users can register into the Uber Eats Clone providing their name, email, password and address. When users register they will be able to specify if they are either a restaurant or consumer.</p>
        <p>2. Registered users can login and will be able to login from any page. All users logged in will also be able to logout.</p>
        <p>3. Registered restaurant users can add dishes to the list of dishes sold by their restaurant. Restaurant users can also update and delete existing dishes. All dishes must specify a name which is unique to that restaurant and a price which must be a positive value.</p>
        <p>4. All users including guests can see a list of registered restaurants along with all dishes the restaurant sells.</p>
        <p>5. The list of restaurant dishes are paginated displaying only five dishes per page.</p>
        <!-- The TO DO PART -->
        <p>6. Only consumers can purchase dishes. Once the user clicks on purchase the payment will be successful and will save the purchase order in the database.</p>
        <p>7. A restaurant user can see a list of orders customers have placed on their restaurant. An order should consist of the name of the consumer, the dish name which was ordered and the date of when the order was placed.</p>
        <!-- Advanced Part -->
        <p>8. After user registration, login or logout, appropiate redirections should be provided.</p>
        <p>9. When restaurant user adds a new dish that dish name must be unique for their restaurant.</p>
        <p>10. When a restaurant user adds a dish they can also upload a photo for that dish. The photo will be displayed with the dish.</p>
        <p>11. Consumer users can add multiple dishes to a cart, along with viewing the contents in the cart, the cost and can remove any unwanted dishes before purchasing these dishes. Once purchased the cart will be emptied.</p>
        <p>12. There is a page which lists the top 5 most popular ordered dishes in the last 30 days.</p>
        <p>13. Restaurants can view a statistic page which shows the amount of sales made by the restaurant along with the weekly sales for past 12 weeks.</p>
        <p>14. Another user called administrator is created through the seeder. After a new restaurant is registered they can't add or remove dishes from their restaurant until it is approved by the administrator.</p>
    </div>

    <div class="postNowPosts">
        <strong><p>Uber Eats Clone Technical Requirements:</p></strong>
        <p>1. Use laravel migration for database table creation.</p>
        <p>2. Use Laravel seeder to insert default test data into the database. There should be enough initial data to thoroughly test the retrieval, update and deletion functionalities you have implemented.</p>
        <p>3. Use Laravel ORM/Eloquent to perform database operations.</p>
        <p>4. Proper security measures must be implemented.</p>
        <p>5. Template inheritance has been properly used.</p>
        <p>6. Consistent, readable and descriptive names for files, functions and variables have been used.</p>
        <p>7. Correct indenting and spacing of code has been correctly executed.</p>
        <p>8. Comments have been used for each function along with a short description.</p>
    </div>

    <div class="postNowPosts">
        <strong><p>Github:</p></strong>
        <p>PostNow public repository can be found <a href="https://github.com/JakeAttard/2703ICTAssignment1" target="blank">here</a>.</p>
    </div>
@endsection('content')