# Set in Magento Sage Order ID
Assign Sage OrderID with Magento 2 OrderID

#Get Admin token

Endpoint

POST http://<host>/rest/default/V1/integration/admin/token

Headers

Content-Type application/json


Payload
{
"username": "admin",
"password": "123123q"
}



#Set SageOrderId

POST http://<host>/rest/V1/sage/<order id>
PUT http://<host>/rest/V1/sage/<order id>

BODY:
{ "entity":{"sage_order_id":1111111}}


#Set Template

copy file from: /vendor/magento/module-sales/view/adminhtml/templates/order/view/info.phtml
to: app/design/adminhtml/Magento/blank/Magento_Sales/templates/order/view/info.phtml