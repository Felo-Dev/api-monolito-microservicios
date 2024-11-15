# 🛍️ **Microservicios para Comercio Electrónico**

Este proyecto implementa una arquitectura de microservicios en Laravel para un comercio electrónico, dividiendo las funcionalidades en servicios independientes para **Usuarios**, **Productos**, **Pedidos**, y **Pagos**.

El objetivo es mejorar la **escalabilidad**, **mantenimiento**, y la **comunicación entre servicios** mediante APIs RESTful.

---

## 🚀 **Características del Proyecto**

1. **Arquitectura Limpia**:

    - Cada entidad (Usuarios, Productos, Pedidos, Pagos) está organizada en microservicios independientes.
    - Separación de responsabilidades para facilitar la mantenibilidad.

2. **APIs RESTful**:

    - Proveen una interfaz estándar para la comunicación con el frontend.
    - Métodos HTTP: `GET`, `POST`, `PUT`, `DELETE`.

3. **Base de Datos**:

    - Esquema optimizado con tablas relacionadas.
    - Uso de triggers y procedimientos almacenados para operaciones críticas.

4. **CRUD Completo**:

    - Operaciones básicas para la gestión de entidades: Crear, Leer, Actualizar y Eliminar.

5. **Despliegue en la Nube**:
    - Preparado para ejecutarse en servicios como AWS, Heroku o DigitalOcean.

---

## 🔧 **Instalación**

Sigue los pasos a continuación para ejecutar el proyecto localmente.

### **Requisitos Previos**

-   PHP >= 8.1
-   Composer
-   MySQL/MariaDB
-   Laravel >= 10

### **Instala las dependencias:**

bash
Copiar código
composer install

### **Configuracion el archivo .env:**

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ecommerce_db
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña

### **Genera la clave de la aplicación:**

bash
Copiar código
php artisan key:generate

### **Ejecuta las migraciones y los seeders:**

bash
Copiar código
php artisan migrate --seed

### **Inicia el servidor de desarrollo:**

bash
Copiar código
php artisan serve

## 📡 Rutas API - Usuarios

|
Método
|
Ruta
|
Descripción
|
|

---

## |

## |

|
|
GET
|
`/api/users`
|
Obtener todos los usuarios
|
|
GET
|
`/api/users/{id}`
|
Obtener un usuario específico
|
|
POST
|
`/api/users`
|
Crear un usuario
|
|
PUT
|
`/api/users/{id}`
|
Actualizar un usuario
|
|
DELETE
|
`/api/users/{id}`
|
Eliminar un usuario
|

## 📡 Rutas API - Productos

|
Método
|
Ruta
|
Descripción
|
|

---

## |

## |

|
|
GET
|
`/api/products`
|
Obtener todos los productos
|
|
GET
|
`/api/products/{id}`
|
Obtener un producto específico
|
|
POST
|
`/api/products`
|
Crear un producto
|
|
PUT
|
`/api/products/{id}`
|
Actualizar un producto
|
|
DELETE
|
`/api/products/{id}`
|
Eliminar un producto
|

## 📡 Rutas API - Pedidos

|
Método
|
Ruta
|
Descripción
|
|

---

## |

## |

|
|
GET
|
`/api/orders`
|
Obtener todos los pedidos
|
|
GET
|
`/api/orders/{id}`
|
Obtener un pedido específico
|
|
POST
|
`/api/orders`
|
Crear un pedido
|
|
PUT
|
`/api/orders/{id}`
|
Actualizar un pedido
|
|
DELETE
|
`/api/orders/{id}`
|
Eliminar un pedido
|

## 📡 Rutas API - Pagos

|
Método
|
Ruta
|
Descripción
|
|

---

## |

## |

|
|
GET
|
`/api/payments`
|
Obtener todos los pagos
|
|
GET
|
`/api/payments/{id}`
|
Obtener un pago específico
|
|
POST
|
`/api/payments`
|
Crear un pago
|
|
PUT
|
`/api/payments/{id}`
|
Actualizar un pago
|
|
DELETE
|
`/api/payments/{id}`
|
Eliminar un pago
|
