<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => 'El campo :attribute debe ser aceptado.',
    'active_url'           => 'El campo :attribute no es una URL válida.',
    'after'                => 'El campo :attribute debe ser una fecha posterior a :date.',
    'after_or_equal'       => 'El campo :attribute debe ser una fecha posterior o igual a :date.',
    'alpha'                => 'El campo :attribute sólo puede contener letras.',
    'alpha_dash'           => 'El campo :attribute sólo puede contener letras, números y guiones (a-z, 0-9, -_).',
    'alpha_num'            => 'El campo :attribute sólo puede contener letras y números.',
    'array'                => 'El campo :attribute debe ser un array.',
    'before'               => 'El campo :attribute debe ser una fecha anterior a :date.',
    'before_or_equal'      => 'El campo :attribute debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => 'El campo :attribute debe ser un valor entre :min y :max.',
        'file'    => 'El archivo :attribute debe pesar entre :min y :max kilobytes.',
        'string'  => 'El campo :attribute debe contener entre :min y :max caracteres.',
        'array'   => 'El campo :attribute debe contener entre :min y :max elementos.',
    ],
    'boolean'              => 'El campo :attribute debe ser verdadero o falso.',
    'confirmed'            => 'El campo confirmación de :attribute no coincide.',
    'country'              => 'El campo :attribute no es un país válido.',
    'date'                 => 'El campo :attribute no corresponde con una fecha válida.',
    'date_format'          => 'El campo :attribute no corresponde con el formato de fecha :format.',
    'different'            => 'Los campos :attribute y :other han de ser diferentes.',
    'digits'               => 'El campo :attribute debe ser un número de :digits dígitos.',
    'digits_between'       => 'El campo :attribute debe contener entre :min y :max dígitos.',
    'dimensions'           => 'El campo :attribute tiene dimensiones invalidas.',
    'distinct'             => 'El campo :attribute tiene un valor duplicado.',
    'email'                => 'El campo :attribute no corresponde con una dirección de e-mail válida.',
    'file'                 => 'El campo :attribute debe ser un archivo.',
    'filled'               => 'El campo :attribute es obligatorio.',
    'exists'               => 'El campo :attribute no existe.',
    'image'                => 'El campo :attribute debe ser una imagen.',
    'in'                   => 'El campo :attribute debe ser igual a alguno de estos valores :values',
    'in_array'             => 'El campo :attribute no existe en :other.',
    'integer'              => 'El campo :attribute debe ser un número entero.',
    'ip'                   => 'El campo :attribute debe ser una dirección IP válida.',
    'json'                 => 'El campo :attribute debe ser una cadena de texto JSON válida.',
    'max'                  => [
        'numeric' => 'El campo :attribute debe ser :max como máximo.',
        'file'    => 'El archivo :attribute debe pesar :max kilobytes como máximo.',
        'string'  => 'El campo :attribute debe contener :max caracteres como máximo.',
        'array'   => 'El campo :attribute debe contener :max elementos como máximo.',
    ],
    'mimes'                => 'El campo :attribute debe ser un archivo de tipo :values.',
    'mimetypes'            => 'El campo :attribute debe ser un archivo de tipo :values.',
    'min'                  => [
        'numeric' => 'El campo :attribute debe tener al menos :min.',
        'file'    => 'El archivo :attribute debe pesar al menos :min kilobytes.',
        'string'  => 'El campo :attribute debe contener al menos :min caracteres.',
        'array'   => 'El campo :attribute no debe contener más de :min elementos.',
    ],
    'not_in'               => 'El campo :attribute seleccionado es invalido.',
    'numeric'              => 'El campo :attribute debe ser un numero.',
    'present'              => 'El campo :attribute debe estar presente.',
    'regex'                => 'El formato del campo :attribute es inválido.',
    'required'             => 'El campo :attribute es obligatorio',
    'required_if'          => 'El campo :attribute es obligatorio cuando el campo :other es :value.',
    'required_unless'      => 'El campo :attribute es requerido a menos que :other se encuentre en :values.',
    'required_with'        => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo :attribute es obligatorio cuando :values está presente.',
    'required_without'     => 'El campo :attribute es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo :attribute es obligatorio cuando ningún campo :values están presentes.',
    'same'                 => 'Los campos :attribute y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El campo :attribute debe ser :size.',
        'file'    => 'El archivo :attribute debe pesar :size kilobytes.',
        'string'  => 'El campo :attribute debe contener :size caracteres.',
        'array'   => 'El campo :attribute debe contener :size elementos.',
    ],
    'state'                => 'El estado no es válido para el país seleccionado.',
    'string'               => 'El campo :attribute debe contener solo caracteres.',
    'timezone'             => 'El campo :attribute debe contener una zona válida.',
    'unique'               => 'El elemento :attribute ya está en uso.',
    'uploaded'             => 'El elemento :attribute fallo al subir.',
    'url'                  => 'El formato de :attribute no corresponde con el de una URL válida.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'account'               => 'cuenta',
        'account_number'        => 'numero de cuenta',
        'address'               => 'dirección',
        'amounts'               => 'montos',
        'amounts.*'             => 'importe',
        'assigned_to'           => 'asignar a',
        'assigned_to_id'        => 'asignar a',
        'attachment'            => 'adjunto',
        'attention_to'          => 'atencion a',
        'barcode'               => 'codigo de barras',
        'bank_account'          => 'banco / cuenta',
        'bank'                  => 'banco',
        'bank_rfc'              => 'RFC del banco',
        'bank_name'             => 'nombre del banco',
        'base_salary'           => 'salario base',
        'birth_date'            => 'fecha de nacimiento',
        'branch_offices'        => 'sucursales',
        'brands'                => 'marcas',
        'brand_id'              => 'marca',
        'business_name'         => 'razon social',
        'certified_serial'      => 'serial del certificado',
        'check'                 => 'cheque',
        'client_number'         => 'numero de cliente',
        'consecutive'           => 'consecutivo',
        'category_id'           => 'categoria',
        'commission'            => 'comision',
        'contact_id'            => 'contacto',
        'contact_name'          => 'nombre de contacto',
        'customer_id'           => 'cliente',
        'customer_name'         => 'nombre del cliente',
        'data_sheet'            => 'ficha tecnica',
        'date'                  => 'fecha',
        'delivered_date'        => 'fecha de Entrega',
        'delivery_address'      => 'dirección de entrega',
        'delivery_time'         => 'tiempo de entrega',
        'delivery_way'          => 'forma de entrega',
        'delivered_by'          => 'Entregado por',
        'description'           => 'descripcion',
        'digital_stamp'         => 'sello digital',
        'discount'              => 'descuento',
        'discount_type'         => 'tipo de descuento',
        'dispatch_cost'         => 'costo de envio',
        'document_number'       => 'no. documento',
        'email'                 => 'email',
        'employee_type'         => 'tipo de empleado',
        'employer_registration' => 'registro patronal',
        'employer_rfc'          => 'rfc empleado',
        'end_date'              => 'fecha de termino',
        'entry'                 => 'entrada',
        'finger_print'          => 'huella digital',
        'folio_number'          => 'numero de folio',
        'has_discount'          => 'tiene descuento',
        'image'                 => 'imagen',
        'invoice'               => 'factura',
        'invoice_notes'         => 'notas de factura',
        'limit_date'            => 'fecha limite',
        'lot_number'            => 'numero de lote',
        'lot_reception_date'    => 'fecha recepcion lote',
        'lot_reception_time'    => 'hora recepcion lote',
        'message'               => 'mensaje',
        'model'                 => 'modelo',
        'move_type'             => 'tipo de movimiento',
        'name'                  => 'nombre',
        'name_of_insure'        => 'Nombre del asegurado',
        'notes'                 => 'notas',
        'password'              => 'contraseña',
        'password_confirmation' => 'confirmacion de contraseña',
        'payment_status'        => 'estatus de pago',
        'permissions[]'         => 'permisos',
        'phone'                 => 'telefono',
        'phone_ext'             => 'extension telefonica',
        'phone_number'          => 'numero telefonico',
        'priority'              => 'urgente',
        'product'               => 'producto',
        'product_id'            => 'producto',
        'products'              => 'productos',
        'products.*'            => 'producto',
        'project'               => 'proyecto',
        'provider_description'  => 'descripcion del proveedor',
        'purchase_order'        => 'orden de compra',
        'purchase_price'        => 'precio de compra',
        'quantities'            => 'cantidades',
        'quantities.*'          => 'cantidad',
        'quantity'              => 'cantidad',
        'quote_id'              => 'cotización',
        'reference'             => 'referencia',
        'register_date'         => 'fecha de registro',
        'relation_type.*'       => 'tipo de relacion',
        'relation_type[]'       => 'tipo de relacion',
        'relation_uuid.*'       => 'UUID a relacionar',
        'relation_uuid[]'       => 'UUID a relacionar',
        'remission'             => 'remisión',
        'remission_id'          => 'remision',
        'sat_code'              => 'codigo del SAT',
        'sale'                  => 'venta',
        'sale_price'            => 'precio de venta',
        'series_id'             => 'serie',
        'short_description'     => 'descripción',
        'start_date'            => 'fecha de inicio',
        'sub_digits'            => 'digitos de sub delegación',
        'subject'               => 'asunto',
        'supplier_id'           => 'proveedor',
        'title'                 => 'titulo',
        'type'                  => 'tipo',
        'unities.*'             => 'unidad',
        'usd'                   => 'dolares',
        'usd_value'             => 'tipo de cambio',
        'unit'                  => 'unidad',
        'uuid'                  => 'UUID',
        'validity'              => 'vigencia',
        'warranty'              => 'garantia',
        'way_id'                => 'forma de pago',
        'way_to_pay'            => 'forma de pago',
        'payer_bank_rfc'        => 'RFC del banco ordenante',
        'payer_account'         => 'cuenta ordenante',
        'percentage_profit'     => 'porcentaje de ganancia',
        'retention'             => 'retención',
    ],

];
