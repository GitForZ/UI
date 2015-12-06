


<div class="jumbotron">
    <h4>Title</h4>
</div>

<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', $setTitle, ['class' => 'form-control', 'type' => 'text']) !!}
</div>

<div class="jumbotron">
<h4>Income</h4>
</div>

<div class="form-group">
    {!! Form::label('balance', 'Current Balance:') !!}
    {!! Form::text('balance', null, ['class' => 'form-control', 'type' => 'number']) !!}
</div>

<div class="form-group">
    {!! Form::label('income', 'Monthly Income:') !!}
    {!! Form::text('income', null, ['class' => 'form-control', 'type' => 'number']) !!}
</div>

<div class="jumbotron">
<h4>Expenses</h4>
</div>

<div class="form-group">
    {!! Form::label('housing', 'Housing:') !!}
    {!! Form::text('housing', null, ['class' => 'form-control', 'type' => 'number']) !!}
</div>

<div class="form-group">
    {!! Form::label('utilities', 'Utilities:') !!}
    {!! Form::text('utilities', null, ['class' => 'form-control', 'type' => 'number']) !!}
</div>

<div class="form-group">
    {!! Form::label('food', 'Food:') !!}
    {!! Form::text('food', null, ['class' => 'form-control', 'type' => 'number']) !!}
</div>

<div class="form-group">
    {!! Form::label('debt', 'Debt:') !!}
    {!! Form::text('debt', null, ['class' => 'form-control', 'type' => 'number']) !!}
</div>

<div class="form-group">
    {!! Form::label('transportation', 'Transportation:') !!}
    {!! Form::text('transportation', null, ['class' => 'form-control', 'type' => 'number']) !!}
</div>

<div class="form-group">
    {!! Form::label('fun', 'Fun:') !!}
    {!! Form::text('fun', null, ['class' => 'form-control', 'type' => 'number']) !!}
</div>

<div class = "form-group">
    {!! Form::label('today', 'Date:') !!}
    {!! Form::input('date', 'today', date('Y-m-d'), ['class' => 'form-control'])!!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>