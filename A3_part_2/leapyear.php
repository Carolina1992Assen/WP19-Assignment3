<?php
/* Header */
$page_title = 'Webprogramming Assignment 3';
$navigation = Array(
    'active' => 'Simple Form',
    'items' => Array(
        'News' => '/WP19/assignment_3/index.php',
        'Add news item' => '/WP19/assignment_3/news_add.php',
        'Leap Year' => '/WP19/assignment_3/leapyear.php',
        'Simple Form' => '/WP19/assignment_3/simple_form.php'
    )
);
include __DIR__ . '/tpl/head.php';
include __DIR__ . '/tpl/body_start.php';

?>


    <div id="greetings">
        <h1>

        </h1>
    </div>

    <div id="area">
        <p>

        </p>
    </div>

<div class="table">
    <table class="table" id="t" >
        <caption><h3>The next 5 leap years, this will be your age!</h3></caption>
        <tr>
            <th>Year</th>
            <th>Age</th>
        </tr>
        <tr>
            <td>2024</td>
            <td id="first"></td>
        </tr>
        <tr>
            <td>2028</td>
            <td id="second"></td>
        </tr>
        <tr>
            <td>2032</td>
            <td id="third"></td>
        </tr>
        <tr>
            <td>2036</td>
            <td id="fourth"></td>
        </tr>
        <tr>
            <td>2044</td>
            <td id="fifth"></td>
        </tr>
    </table>
</div>
        <div class="container">
            <div class="row wp-row">
                <div class="col-md-12">
                    <form action="leapyear.php" method="POST" id="my_form">
                        <div class="form-group">
                            <label for="name"><strong>name:</strong></label>
                            <input type="text" class="form-control" id="name" name="nana">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid name
                            </div>
                        </div>

                        <div class="form-group">
                            <label id="a" for="age"><strong>age:</strong></label>
                            <input type="number" id="age" class="form-control" name="a">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid age
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="place"><strong>place:</strong></label>
                            <input type="text" id="place" class="form-control" name="p">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid place
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email"><strong>email:</strong></label>
                            <input type="email" id="email" class="form-control" name="e">
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                            <div class="invalid-feedback">
                                Enter a valid email
                            </div>
                        </div>
                        <button id="sub" name=submit class="button" type="submit"><strong>Send</strong></button>
                    </form>
                </div>
            </div>
        </div>



<?php
include __DIR__ . '/tpl/body_end.php';
?>

