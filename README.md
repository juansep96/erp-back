# ERP-Back- Backend para Sistema de Gestión Empresarial

Este proyecto es el backend de un **Sistema de Gestión Empresarial (ERP)**, desarrollado con **Laravel**. 

La autenticacion se realiza mediante una fachada con metodos y atributos propios. Ademas, el middlware AuthUserMiddleware verifica la validez del token en cada llamada a las rutas protegidas en api.php.

La rama `SUCURSALES` incluye funcionalidades avanzadas para la administración de múltiples sucursales, autenticación tokenizada y pruebas automatizadas.

Por motivos de confidencialidad y privacidad, este repositorio contiene solo los modulos objetivo.

## 🚀 Tecnologías utilizadas

- **Laravel**: Framework PHP para el backend.
- **Docker**: Contenedorización para facilitar despliegues.
- **Tokenización**: Implementación de autenticación segura con JWT.
- **Pruebas automatizadas**: Con PHPUnit.
- **Rutas API**: Endpoints optimizados para integración con frontend y clientes externos.

## 📦 Instalación y ejecución

1. Clonar el repositorio y cambiar a la rama `SUCURSALES`:
   ```bash
   git clone -b SUCURSALES https://github.com/juansepu96/erp-back.git
   cd erp-back
