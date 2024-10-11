<?php

const SERVERURL = "http://localhost/rutas/";
const COMPANY = "Empresa ABC";
const VERSION = "1.0";

date_default_timezone_set("America/Lima");

//Métodos comunes en toda la App
function renderContentHeader($Titulo = "", $path = "", $root = "")
{
  return
    "<div class='content-header'>
      <div class='container-fluid'>
        <div class='row mb-2'>
          <div class='col-sm-6'>
            <h1 class='m-0'>{$Titulo}</h1>
          </div>
          <div class='col-sm-6'>
            <ol class='breadcrumb float-sm-right'>
              <li class='breadcrumb-item'><a href='{$root}'>{$path}</a></li>
              <li class='breadcrumb-item active'>{$Titulo}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  ";
}
