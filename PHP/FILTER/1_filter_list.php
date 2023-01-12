<h1>PHP Filters</h1>

<hr>

<p class="intro">Validating data = Determine if the data is in proper form.</p>
<p class="intro">Sanitizing data = Remove any illegal character from the data.</p>
<hr>

<h2>The PHP Filter Extension </h2>
<p>PHP filters are used to validate and sanitize external input.</p>
<p>The PHP filter extension has many of the functions needed for checking user input,
and is designed to make data validation easier and quicker.</p>
<p>The <code >filter_list()</code> function can be used to list what the PHP filter extension offers: </p>
<div >

<hr>

<h2>Why Use Filters?</h2>
<p>Many web applications receive external input. External input/data can be:</p>
<ul>
  <li>User input from a form</li>
  <li>Cookies</li>
  <li>Web services data</li>
  <li>Server variables</li>
  <li>Database query results</li>
</ul>

<div class="w3-panel w3-note"><p>
<p><strong>You should always validate external data!<br></strong>Invalid submitted data can lead to security problems and break your webpage!<br>
By using PHP filters you can be sure your application gets the correct input!
</p>
</div>


<hr>
<h2>PHP filter_var() Function</h2>
<p>The <code class="w3-codespan">filter_var()</code> function both validate and sanitize data.</p>
<p>The <code class="w3-codespan">filter_var()</code> function filters a single variable with a specified filter. It takes two pieces of data:</p>
<ul>
  <li>The variable you want to check</li>
  <li>The type of check to use</li>
</ul>
<hr>



<p class="intro">Validating data = Determine if the data is in proper form.</p>
<p class="intro">Sanitizing data = Remove any illegal character from the data.</p>
<hr>

<table>
  <tr>
    <td><h3>LIST OF FILTERS IN PHP</h3></td>
  </tr>
  <?php
  foreach (filter_list() as $filter) {
    echo '<tr><td>' . $filter . '</td></tr>';
  }
  ?>
</table>