@extends('welcome')

@section('content')
<style>
    .header {
  width: 100%;
  text-align: center;
  color: #282828;
  margin: 0;
padding-top: 100px;
}

.header h1,
.header h2,
.header h3 {
  margin: 5px 0;
}

.header h1 {
  font: 500 3em/1.8em 'Roboto', sans-serif;
}

.header h2 {
  font: 300 1.8em/1em 'Roboto', sans-serif;
}

h3 {
  font: 300 1.4em/1em 'Roboto', sans-serif;
  text-align: center;
  width: 100%;
}

.conversionForm {
  margin: auto;
  width: 100%;
  max-width: 200px;
  overflow: hidden;
  font: 300 1.2em/1em 'Roboto', sans-serif;
}

.conversionForm label {
  font-weight: 500;
}

.conversionForm select,
.conversionForm input {
  outline: none;
}

.conversionForm__amount {
  width: 80%;
  margin: auto;
}

.conversionForm__amount label {
  text-align: center;
  display: block;
}

.conversionForm__amount input {
  margin: 5px auto;
  display: block;
}

.conversionForm__currencies {
  width: 100%;
  float: left;
  clear: left;
  margin: 10px 0;
}

.conversionForm__currencies div {
  width: 50%;
  float: left;
}

.conversionForm__currencies div label {
  text-align: center;
  display: block;
}

.conversionForm__currencies div select {
  width: 55px;
  display: block;
  margin: 5px auto;
  border: none;
}

.conversionForm .currencySubmit {
  display: block;
  margin: 5px auto;
  appearance: none;
  background-color: #000;
  color: #fff;
  border: 1px solid #000;
  font: 300 1em/1em 'Roboto', sans-serif;
  padding: 10px 15px 8px 15px;
  text-transform: uppercase;
  cursor: pointer;
  -webkit-transition: all 0.1s;
  -moz-transition: all 0.1s;
  transition: all 0.1s;
}

.conversionForm .currencySubmit:hover {
  background-color: #fff;
  color: #000;
  border: 1px solid #C7C7C7;
  font-weight: 500;
}

.output {
  font: 500 2em/1em 'Roboto', sans-serif;
  text-align: center;
}
</style>


<div class="header">
    <h1>Conversión de divisas</h1>
    <h2>Usando la API de fixer.io</h2>
</div>


<form method="POST" action="converto" class="conversionForm">
    @csrf
    <section class="conversionForm__amount">
        <label>Amount:</label>
        <input type="number" required name="amount" class="currencyValue">
    </section>

    <section class="conversionForm__currencies">

        <div class="conversionForm__from">
            <label>From:</label>
            <select name="from" class="convertFrom">
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="COP">COP</option>
                <option value="ARS">ARS</option>
                <option value="SZL">SZL</option>
                <option value="LBP">LBP</option>
                <option value="CLF">CLF</option>

            </select>
        </div>

        <div class="conversionForm__to">
            <label>To:</label>
            <select name="to" class="convertTo">
                <option value="USD">USD</option>
                <option value="EUR">EUR</option>
                <option value="COP">COP</option>
                <option value="ARS">ARS</option>
                <option value="SZL">SZL</option>
                <option value="LBP">LBP</option>
                <option value="CLF">CLF</option>
            </select>
        </div>
    </section>


    <input type="submit" class="currencySubmit">
</form>
@if ($show == true)
    <p class="output">{{ $to }} $ {{number_format($res->result) }}</p>
@endif

@endsection
