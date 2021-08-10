<?php


namespace src;


class EmployeeManager
{
    public array $employees = [];
    public string $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    function readDataToFile()
    {
        // doc du lieu tu  file json
        $dataJson = file_get_contents($this->filePath);
        // chuyen du lieu json -> array
        return json_decode($dataJson, true);
    }

    function getListEmployee(): array
    {
        $data = $this->readDataToFile();
        foreach ($data as $item) {
            $employee = new Employee($item);
            array_push($this->employees, $employee);
        }

        return $this->employees;
    }

    function getEmployeeByIndex($index): Employee
    {
        $data = $this->readDataToFile();
        $item = $data[$index];
        return new Employee($item);
    }

    function update($index, $newData)
    {
        $data = $this->readDataToFile();
        // arr = [1, 3, 4]
        // arr[0] = 9 -> [9, 3, 4]
        $data[$index] = $newData;
        $this->saveDataToFile($data);
    }

    function saveDataToFile($data)
    {
        //chuyen du lieu ve json
        $dataJson = json_encode($data);
        // ghi du lieu vao file
        file_put_contents($this->filePath, $dataJson);
    }
}