<?php
class MyAjaxController
{
    public function getRequest(Request $request)
    {
        // get the request parameters
        $param1 = $request->query->get('param1');

        // Do something with the parameters, for example call a service or a model
        $data = MyModel::getDataFromCSV($param1);

        // Return a JSON response
        return new JsonResponse(['key' => $data]);
    }
}


