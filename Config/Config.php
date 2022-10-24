<?php 
	const BASE_URL = "http://localhost/PetrotalFinal"; 

	//Zona horaria
	date_default_timezone_set('America/Lima');

	//Datos de conexión a Base de Datos
	const DB_HOST = "localhost";
	const DB_NAME = "SISMEDIC";
	const DB_USER = "sa";
	const DB_PASSWORD = "123456";
	//const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	//const NOMBRE_REMITENTE = "Tienda Virtual";
	//const EMAIL_REMITENTE = "no-reply@xxxxx.com";
	//const NOMBRE_EMPESA = "Tienda Virtual";
	//const WEB_EMPRESA = "www.xxxxx.com";

	//const DESCRIPCION = "L .";
	//const SHAREDHASH = " ";
	//Datos envio de correo
	const NOMBRE_REMITENTE = "SYSMEDIC";
	const EMAIL_REMITENTE = "no-reply@xxxxxx.com";
	const NOMBRE_EMPRESA = "SYSMEDIC";
	const WEB_EMPRESA = "www.xxxxxx.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos de moda.";
	const SHAREDHASH = "TiendaVirtual";


	//Datos Empresa
	const DIRECCION = "Avenida las Américas Zona 13, Peru";
	const TELEMPRESA = "+99999";
	const WHATSAPP = "+9999999";
	const EMAIL_EMPRESA = "info@xxxx.com";
	const EMAIL_PEDIDOS = "info@xxxxx.com"; 
	const EMAIL_SUSCRIPCION = "info@xxxxx.com";
	const EMAIL_CONTACTO = "info@xxxxx.com";
 

	//Datos para Encriptar / Desencriptar
	const KEY = 'abelosh';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPACIENTES = 4; 
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RUSUARIO = 3;

	//const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	
	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/xxxx";
	const INSTAGRAM = "https://www.instagram.com/xxxxx/";
	

 ?>