<?php
return [

	'categories' => [
		'customers'           => 'Clientes',
		'imss_registers'      => 'Altas del IMSS',
		'suppliers'           => 'Proveedores',
		'purchase_orders'     => 'Ordenes de compra',
		'products'            => 'Productos',
		'products_categories' => 'Categorias',
		'products_brands'     => 'Marcas',
		'products_entries'    => 'Entrdas',
		'products_exits'      => 'Salidas',
		'quotes'              => 'Cotizaciones',
		'orders'              => 'Pedidos',
		'remissions'          => 'Remisiones',
		'users'               => 'Usuarios',
		'tasks'               => 'Tareas',
        'roles'               => 'Roles',
        'mercado_libre'       => 'Mercado Libre',
        'sales'               => 'Ventas',
	],

	'permissions' => [

        // IMSS Registers
        'create_imss_registers'              => 'Crear Alta de IMSS',
        'edit_imss_registers'                => 'Editar Alta de IMSS',
        'delete_imss_registers'              => 'Eliminar Alta de IMSS',
        'show_imss_registers'                => 'Ver Alta de IMSS',
        'list_imss_registers'                => 'Acceso a Altas de IMSS',
        'create_imss_registers_pdf'          => 'Crear PDF de Altas de IMSS',

        // Customers
        'create_customers'                   => 'Crear Cliente',
        'edit_customers'                     => 'Editar Cliente',
        'delete_customers'                   => 'Eliminar Cliente',
        'show_customers'                     => 'Ver Cliente',
        'list_customers'                     => 'Acceso Clientees',

        // Suppliers
        'create_suppliers'                   => 'Crear Proveedor',
        'edit_suppliers'                     => 'Editar Proveedor',
        'delete_suppliers'                   => 'Eliminar Proveedor',
        'show_suppliers'                     => 'Ver Proveedor',
        'list_suppliers'                     => 'Acceso a Proveedores',

        // Purchase Orders
        'create_purchase_orders'             => 'Crear Orden de Compra',
        'edit_purchase_orders'               => 'Editar Orden de Compra',
        'delete_purchase_orders'             => 'Eliminar Orden de Compra',
        'show_purchase_orders'               => 'Ver Orden de Compra',
        'list_purchase_orders'               => 'Acceso a Ordenes de Compra',
        'create_purchase_orders_pdf'         => 'Crear PDF de Orden de Compra',

        // Products
        'create_products'                    => 'Crear Producto',
        'edit_products'                      => 'Editar Producto',
        'delete_products'                    => 'Eliminar Producto',
        'show_products'                      => 'Ver Producto',
        'list_products'                      => 'Acceso a Productos',
        'download_products_excel'            => 'Descargar Excel de Productos',
        'upload_products_excel'              => 'Subir Excel de Productos',
        'create_products_suppliers'          => 'Asignar Proveedores a Productos',

        // Products Categories
        'create_products_categories'         => 'Crear Categoría',
        'edit_products_categories'           => 'Editar Categoría',
        'delete_products_categories'         => 'Eliminar Categoría',
        'show_products_categories'           => 'Ver Categoría',
        'list_products_categories'           => 'Acceso a Categorías',
        'create_products_categories_catalog' => 'Crear Catalogo de Categorias',

        // Products Brands
        'create_products_brands'             => 'Crear Marca',
        'edit_products_brands'               => 'Editar Marca',
        'delete_products_brands'             => 'Eliminar Marca',
        'show_products_brands'               => 'Ver Marca',
        'list_products_brands'               => 'Acceso a Marcas',

        // Products Entries
        'create_products_entries'            => 'Crear Entrada',
        'edit_products_entries'              => 'Editar Entrada',
        'delete_products_entries'            => 'Eliminar Entrada',
        'show_products_entries'              => 'Ver Entrada',
        'list_products_entries'              => 'Acceso a Entradas',

        // Products Exits
        'create_products_exits'              => 'Crear Salida',
        'edit_products_exits'                => 'Editar Salida',
        'delete_products_exits'              => 'Eliminar Salida',
        'show_products_exits'                => 'Ver Salida',
        'list_products_exits'                => 'Acceso a Salidas',

        // Quotes
        'create_quotes'                      => 'Crear Cotización',
        'edit_quotes'                        => 'Editar Cotización',
        'delete_quotes'                      => 'Eliminar Cotización',
        'show_quotes'                        => 'Ver Cotización',
        'list_quotes'                        => 'Acceso a Cotizaciones',
        'create_quotes_pdf'                  => 'Crear PDF de Cotizacion',
        'create_quotes_order'                => 'Crear Pedido de Cotizacion',
        'create_quotes_remission'            => 'Crear Remision de Cotizacion',

        // Orders
        'create_orders'                      => 'Crear Pedido',
        'edit_orders'                        => 'Editar Pedido',
        'delete_orders'                      => 'Eliminar Pedido',
        'show_orders'                        => 'Ver Pedido',
        'list_orders'                        => 'Acceso a Pedidos',
        'change_orders_status'               => 'Cambiar Estatus de Pedido',
        'change_orders_payment_status'       => 'Cambiar Estatus de Pago de Pedido',
        'create_orders_remission'            => 'Crear Remision de Pedido',
        'create_orders_notes'                => 'Crear Notas de Pedido',
        'create_orders_attachments'          => 'Crear Adjuntos de Pedido',
        'create_orders_tasks'                => 'Crear Tareas de Pedido',

        // Remissions
        'create_remissions'                  => 'Crear Remisión',
        'edit_remissions'                    => 'Editar Remisión',
        'delete_remissions'                  => 'Eliminar Remisión',
        'show_remissions'                    => 'Ver Remisión',
        'list_remissions'                    => 'Acceso a Remisiones',
        'create_remissions_pdf'              => 'Crear PDF de Remision',

        // Sales
        'list_sales'                         => 'Acceso a Ventas',

        // Users
        'create_users'                       => 'Crear Usuario',
        'edit_users'                         => 'Editar Usuario',
        'delete_users'                       => 'Eliminar Usuario',
        'show_users'                         => 'Ver Usuario',
        'list_users'                         => 'Acceso a Usuarios',

        // ML Simulator
        'list_ml_simulator'                  => 'Simulador ML',

        // Tasks
        'create_tasks'                       => 'Crear Tarea',
        'edit_tasks'                         => 'Editar Tarea',
        'delete_tasks'                       => 'Eliminar Tarea',
        'show_tasks'                         => 'Ver Tarea',
        'list_tasks'                         => 'Acceso a Tareas',
        'list_tasks_general'                 => 'Listar Tareas Generales',
        'list_tasks_accepted'                => 'Listar Tareas Aceptadas',
        'list_tasks_canceled'                => 'Listar Tareas Canceladas',

        // Roles
        'create_roles'                       => 'Crear Role',
        'edit_roles'                         => 'Editar Role',
        'delete_roles'                       => 'Eliminar Role',
        'show_roles'                         => 'Ver Role',
        'list_roles'                         => 'Acceso a Roles',

        // Mercado Libre
        'list_ml_prices_simulator'           => 'Acceso a simulador de precios de Mercado Libre',

        // Data Filters
        'create_data_filters'                => 'Crear Filtros de Datos',
        'edit_data_filters'                  => 'Editar Filtros de Datos',
        'delete_data_filters'                => 'Eliminar Filtros de Datos',
        'show_data_filters'                  => 'Ver Filtros de Datos',
        'list_data_filters'                  => 'Acceso a Filtros de Datos',
	],

    'roles' => [
        'test' => 'test',
        'super-admin' => 'Super Administrador',
        'default' => 'Defecto'
    ]
];