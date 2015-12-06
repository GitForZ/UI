@extends('app')

@section('content')

<div class="container">
<h1>Getting Started</h1>

<a href="http://m.wikihow.com/Do-a-Monthly-Budget" target="_blank">Budget Basics</a>

<h2>Create a Budget:</h2>
<ul>
    <li>1. Go to the homepage</li>
    <li>2. Click create</li>
    <li>3. Fill in your current balance and monthly income</li>
    <li>4. Log your current expenses for the month/budget</li>
</ul>

<h2>View Report</h2>
    <ul>

        <li>1. Go to homepage and click a budget</li>
        <li>2. Here you can see a breakdown of your budget
        <ul>
            <li>From here you can also view a bar chart and pie chart of expenses</li>
            <li>From here you can also delete or update budget to add onto expenses or if you made a mistake</li>
        </ul>

        </li>
    </ul>
<h1>Planned Implementation</h1>
<ul>
    <li>Change title of budgets and make unique</li>
    <li>Easier adding of expenses to current budget</li>
    <li>Add your own columns/categories to budget</li>
    <li>Possibly have balance carry over to other budgets although could restrict things</li>
    <li>More charts and report information. </li>
</ul>

    <p>At the moment the way you add an expense or income is by editing the values of the current budget. Ideally
    we would like to make it so that you have individual expenses within each category and also add your own
    categories. We'd like to make it so that when you go to your edit budget you simply click a button to add a expense
    or inflow and it will reflect changes to total expenses/etc.</p>

@stop
</div>

