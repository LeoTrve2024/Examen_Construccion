#include <iostream>
#include <fstream>
#include <string>

using namespace std;

void processFile(const string& inputFileName, const string& outputFileName) {
    ifstream inputFile(inputFileName); // Archivo de entrada
    ofstream outputFile(outputFileName); // Archivo de salida

    if (!inputFile.is_open()) {
        cerr << "No se pudo abrir el archivo de entrada: " << inputFileName << endl;
        return;
    }

    if (!outputFile.is_open()) {
        cerr << "No se pudo abrir el archivo de salida: " << outputFileName << endl;
        return;
    }

    string linea;
    string nombreModelo;
    int longitud;
    
    nombreModelo= outputFileName;
    longitud = nombreModelo.length();
    nombreModelo = nombreModelo.substr(0, nombreModelo.length()-4);
    
    cout<< longitud <<endl;
    cout<<nombreModelo<<endl;
    outputFile << "<?php" << endl;
    outputFile << "require_once $_SERVER['DOCUMENT_ROOT'] . '/models/connect/conexion.php';" << endl;
    outputFile << endl;
    outputFile << "// TODO LO RELACIONADO A LA BASE DE DATOS, DEBE DE ESTAR EN EL MODELO" << endl;
    outputFile << "// UN MODELO POR LO REGULAR APUNTA A UNA TABLA O UNA VISTA" << endl;
    outputFile << endl;
    outputFile << "class modelo"+nombreModelo << endl;
    outputFile << "{" << endl;
    outputFile << "    private $conexion;" << endl;
    outputFile << endl;
    outputFile << "    // al instanciar la clase debo obtener la conexión" << endl;
    outputFile << "    public function __construct()" << endl;
    outputFile << "    {" << endl;
    outputFile << "        $this->conexion = Conexion::obtenerConexion();" << endl;
    outputFile << "    }" << endl;
    outputFile << "    // debe hacer un método para hacer select" << endl;
    outputFile << "    public function obtener"+nombreModelo+"()" << endl;
    outputFile << "    {" << endl;
    outputFile << "        $query = $this->conexion->query('select '."<<endl;
    outputFile << "                                         username'."<<endl; 
    outputFile << "                                         'from "+nombreModelo+"');" << endl;
    outputFile << "        return $query->fetchAll(PDO::FETCH_ASSOC);" << endl;
    outputFile << "    }" << endl;
    outputFile << "}" << endl;




    outputFile << "        return $query->fetchAll(PDO::FETCH_ASSOC);" << endl;
    outputFile << "    }" << endl;
    outputFile << "}" << endl;



    while (getline(inputFile, linea)) {
        size_t mid = linea.length() / 2; // Calcular el punto medio
        string lineaCodigo = linea.substr(0, mid); // Primera mitad
        lineaCodigo = "codigo generado auto"; // Segunda mitad

        // Escribir las mitades en el archivo de salida
        outputFile << lineaCodigo << endl;
        }

    cout << "Procesamiento completado. Archivo generado: " << outputFileName << endl;

    inputFile.close();
    outputFile.close();
}
