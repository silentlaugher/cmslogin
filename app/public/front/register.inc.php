<?php 
    //check if form is submitted and if request method is post
    if(isset($_POST['registerBtn']) && $_SERVER['REQUEST_METHOD'] === 'POST'){

        //initialize errors array
        $errors = [];

        //validate form inputs
        $arr_user_input_value = array('first_name', 'last_name', 'email', 'username', 'password', 'confirm_password', 'gender', 'month', 'day', 'year');
        $errors = check_input_values($arr_user_input_value, $errors);

        $arr_user_input_length = array('first_name' => 2, 'last_name' => 2, 'email' => 10, 'username' => 4, 'password' => 8);
        $errors = check_input_length($arr_user_input_length, $errors);
    }
?>

<div class="regContainer">
        <div class="regColumn">
            <div class="regHeader">
                <h3>Registration Form</h3>
            </div>
            <div class="regForm">
                <div>
                </div>
                <form action="register.php" method="POST">
                    <table>
                        <div class="name" style="float: left;">
                        <label for="firstNameField" class="form-label">First Name</label>
                            <input type="text" name="first_name"  placeholder="First Name" class="form-control" value="" style="width: 350px;">
                        </div>
                        <div class="lName" style="float: right;">
                        <label for="lastNameField" class="form-label">Last Name</label>
                            <input type="text" name="last_name"  placeholder="Last Name" class="form-control" value="" style="width: 350px;"> 
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div>
                        <label for="emailNameField" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Email" value="">
                        </div>
                        <br>        
                        <div>
                            <label for="usernameField" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="">
                        </div>
                        <br> 
                        <div class="password1" style="float: left;">
                        <label for="passwordField" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password" style="width: 350px;">
                        </div>
                        <div class="password2" style="float: right;">
                            <label for="password2Field" class="form-label">Confirm Password</label>
                            <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" style="width: 350px;">
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div>
                            <fieldset>
                                <legend>Gender</legend>
                                <input id="male" type="hidden" name="gender" value="">
                                <input id="male" type="radio" name="gender" value="male">
                                <label for="male">
                                    Male
                                </label>
                                <input id="female" type="radio" name="gender" value="female">
                                <label for="female">
                                    Female
                                </label>
                                <input id="idrathernotsay" type="radio" name="gender" value="idrathernotsay">
                                <label for="idrathernotsay">
                                    I'd rather not say
                                </label> 
                            </fieldset>
                        </div>
                        <hr>
                        <div>
                            <fieldset class="date">
                                <legend>Date of Birth</legend>
                                <label for="month">Month</label>
                                <select id="month_start" name="month" />
                                <option  value="" selected>Month</option>    
                                <option value="1">January</option>      
                                <option value="2">February</option>      
                                <option value="3">March</option>      
                                <option value="4">April</option>      
                                <option value="5">May</opcenter>      
                                <option value="6">June</option>      
                                <option value="7">July</option>      
                                <option value="8">August</option>      
                                <option value="9">September</option>      
                                <option value="10">October</option>      
                                <option value="11">November</option>      
                                <option value="12">December</option>      
                                </select> -
                                <label for="day_start">Day</label>
                                <select id="day_start" name="day" />
                                <option  value="" selected>Day</option>    
                                <option>1</option>      
                                <option>2</option>      
                                <option>3</option>      
                                <option>4</option>      
                                <option>5</option>      
                                <option>6</option>      
                                <option>7</option>      
                                <option>8</option>      
                                <option>9</option>      
                                <option>10</option>      
                                <option>11</option>      
                                <option>12</option>      
                                <option>13</option>      
                                <option>14</option>      
                                <option>15</option>      
                                <option>16</option>      
                                <option>17</option>      
                                <option>18</option>      
                                <option>19</option>      
                                <option>20</option>      
                                <option>21</option>      
                                <option>22</option>      
                                <option>23</option>      
                                <option>24</option>      
                                <option>25</option>      
                                <option>26</option>      
                                <option>27</option>      
                                <option>28</option>      
                                <option>29</option>      
                                <option>30</option>      
                                <option>31</option>      
                                </select> -
                                <label for="year_start">Year</label>
                                <select id="year_start" name="year" />
                                <option  value="" selected>Year</option>
                                <option>1915</option>
                                <option>1916</option>
                                <option>1917</option>
                                <option>1918</option>
                                <option>1919</option>
                                <option>1920</option>
                                <option>1921</option>
                                <option>1922</option>
                                <option>1923</option>
                                <option>1924</option>
                                <option>1925</option>
                                <option>1926</option>
                                <option>1927</option>
                                <option>1928</option>
                                <option>1929</option>
                                <option>1930</option>
                                <option>1931</option>
                                <option>1932</option>
                                <option>1933</option>
                                <option>1934</option>
                                <option>1935</option>
                                <option>1936</option>
                                <option>1937</option>
                                <option>1938</option>
                                <option>1939</option>
                                <option>1940</option>
                                <option>1941</option>
                                <option>1942</option>
                                <option>1943</option>
                                <option>1944</option>
                                <option>1945</option>
                                <option>1946</option>
                                <option>1947</option>
                                <option>1948</option>
                                <option>1949</option>
                                <option>1950</option>
                                <option>1951</option>
                                <option>1952</option>
                                <option>1953</option>
                                <option>1954</option>
                                <option>1955</option>
                                <option>1956</option>
                                <option>1957</option>
                                <option>1958</option>
                                <option>1959</option>
                                <option>1960</option>
                                <option>1961</option>
                                <option>1962</option>
                                <option>1963</option>
                                <option>1964</option>
                                <option>1965</option>
                                <option>1966</option>
                                <option>1967</option>
                                <option>1968</option>
                                <option>1969</option>
                                <option>1970</option>
                                <option>1971</option>
                                <option>1972</option>
                                <option>1973</option>
                                <option>1974</option>
                                <option>1975</option>
                                <option>1976</option>
                                <option>1977</option>
                                <option>1978</option>
                                <option>1979</option>
                                <option>1980</option>
                                <option>1981</option>
                                <option>1982</option>
                                <option>1983</option>
                                <option>1984</option>
                                <option>1985</option>
                                <option>1986</option>
                                <option>1987</option>
                                <option>1988</option>
                                <option>1989</option>
                                <option>1990</option>
                                <option>1991</option>
                                <option>1992</option>
                                <option>1993</option>
                                <option>1994</option>
                                <option>1995</option>
                                <option>1996</option>
                                <option>1997</option>
                                <option>1998</option>
                                <option>1999</option>
                                <option>2000</option>
                                <option>2001</option>
                                <option>2002</option>
                                </select>
                                <span class="inst">(Month-Day-Year)</span>
                            </fieldset>
                        </div>
                        <hr>
                        <input type="submit" style="float: right;" name="registerBtn" value="Register" class="btn btn-primary">
                    </table>
                </form>
            </div>
            <p>Already have an account?<a href="../public/front/login.inc.php">  Sign in</a></p>
        </div>
    </div>