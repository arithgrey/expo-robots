<script type="text/javascript" src="<?=base_url('application/js/targetasbase/targetasbasemain.js')?>"></script>
<style type="text/css">
h1{
  text-align: center;
}
</style>

<div class="row">
  <h1 class="subheader">Targetas base </h1>
</div>

<div class="row">              
            <dl class="sub-nav">    
                <dd class="active alimentacion" id='alimentacion'>
                  <a onclick="section('alimentacion')">Alimentación</a>
                </dd> 
                <dd id="potencia" class="potencia">
                  <a onclick="section('potencia')" >Potencia</a>
                </dd>               
                <dd id='sensores' class='sensores'>
                  <a onclick="section('sensores')">Sensores</a>
                </dd> 
                <dd id='control' class='control'>
                  <a onclick="section('control')">Control</a>
                </dd> 
                <dd id='diseñomodular' class='diseñomodular'>
                  <a onclick="section('diseño_modular')">Diseño modular</a>
                </dd>                 
            </dl>
</div>  




<div class="row">
  <!-- Alimentacion-->
  <div class='alimentacion_section' id="alimentacion_section">
    <p id='title_p'>Alimentación</p>
  </div>
  <!-- Alimentacion-->
  <div class='potencia_section' id='potencia_section'>
    <p id='title_p'>Potencia</p>
  </div>

  <!-- control-->
  <div class='control_section' id='control_section'>
    <p id='title_p'>Control</p>
  </div>

  <!-- Sensores-->
  <div class='sensores_section' id='sensores_section'>
    <p id='title_p'>Sensores</p>
  </div>
  <!--Diseño modular-->
  <div class='diseñomodular_section' id='diseñomodular_section'>
    <p id='title_p'>Diseño modular</p>
  </div>
</div>

