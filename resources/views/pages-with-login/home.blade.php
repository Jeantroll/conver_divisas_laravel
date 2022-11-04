@extends('welcome')

@section('content')


<style>

main{
    padding-top: 155px;
}

.lp {
  background: #fff;
  box-shadow: 0px 0px 16px 1px rgba(0,0,0,0.4);
  border-radius: 8px;
  max-width: 680px;
  height: 400px;
  margin: auto;
  padding: 32px 32px 8px 32px;
  overflow: hidden;
}
.lp__body {
  display: flex;
}

/*MAIN TEXT*/
.lp__text {
  min-width: 200px;
  padding: 0 0 25px;
  align-self: flex-end;
}
.lp__text__title {
  font-size: 32px;
  text-decoration: underline;
  margin: 0;
}
.lp__text__title-first {
  display: block;
}
.lp__text__subtext {
  color: #aaa;
  font-size: 12px;
  line-height: 1.75;
  margin: 16px 0;
}
/*MAIN IMAGE*/
.lp__mainImg {

}
.lp__mainImg__img {
  width: 100%;
  height: 410px;
  margin: -70px 40px 0;
}
</style>

<main>
    <div class="lp">

      <section class="lp__body">
      <!--- START: TEXT --->
      <div class="lp__text">
        <h1 class="lp__text__title"><span class="lp__text__title-first">Bienvenido a</span>
          convertir divisas</h1>
        <p class="lp__text__subtext">Aquí puedes convertir divisas, gracias al consumo de una api super rapido que usamos.</p>
      </div>
      <!--- END: TEXT --->

      <!--- START: IMG --->
      <div class="lp__mainImg">
        <img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/experience_design_eq3j.svg" class="lp__mainImg__img">
      </div>
      <!--- END: IMG --->
      </section>
    </div>
  </main>
@endsection
