<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $branches = [
            ['descripcion' => 'Unidad de Tecnologias Informaticas', 'sigla' => 'UTI'],
            ['descripcion' => 'Unidad de Tesoreria y Credito Publico e Ingresos', 'sigla' => 'UTCPI'],
            ['descripcion' => 'Unidad de Contabilidad', 'sigla' => 'DC'],
            ['descripcion' => 'Direccion de Recursos Humanos', 'sigla' => 'DRH'],
            ['descripcion' => 'Direccion General de Auditoria Iinterna', 'sigla' => 'DGAI'],
            ['descripcion' => 'Secretaria Deptal. de Planificacion del Desarrollo', 'sigla' => 'SDPD'],
            ['descripcion' => 'Direccion General de Notaria de Gobierno', 'sigla' => 'DGNG'],
            ['descripcion' => 'Unidad de Ventanilla Unica de Tramites', 'sigla' => 'VUT'],
            ['descripcion' => 'Unidad de Manejo de Bienes', 'sigla' => 'UMB'],
            ['descripcion' => 'Unidad de Servicios Generales y Transportes', 'sigla' => 'ASG'],
            ['descripcion' => 'Direccion de Comunicacion Social', 'sigla' => 'DCS'],
            ['descripcion' => 'Direccion de Seguridad Ciudadana', 'sigla' => 'DSC'],
            ['descripcion' => 'Area de Caja Central', 'sigla' => 'ACC'],
            ['descripcion' => 'Area de Kardex', 'sigla' => 'AK'],
            ['descripcion' => 'Area de Almacen Central', 'sigla' => 'AAC'],
            ['descripcion' => 'Direccion Administrativa', 'sigla' => 'DA'],
            ['descripcion' => 'Direccion de Protocolo y Coordinacion con Organizaciones Sociales', 'sigla' => 'DPCOS'],
            ['descripcion' => 'Secretaria General', 'sigla' => 'SG'],
            ['descripcion' => 'Servicio Departamental de Caminos', 'sigla' => 'SEDCAM'],
            ['descripcion' => 'Servicio Deptamental de Salud', 'sigla' => 'SEDES'],
            ['descripcion' => 'Servicio Departamental de Autonomias de La Paz', 'sigla' => 'SEDALP'],
            ['descripcion' => 'Servicio Deptamental de Gestion Social', 'sigla' => 'SEDEGES'],
            ['descripcion' => 'Servicio Departamental Agropecuario', 'sigla' => 'SEDAG'],
            ['descripcion' => 'Programa de Atencion a Ninas y Ninos', 'sigla' => 'PANN'],
            ['descripcion' => 'Servicio Departamental de Deportes', 'sigla' => 'SEDEDE'],
            ['descripcion' => 'Area de Archivo Central', 'sigla' => 'AAC'],
            ['descripcion' => 'Ministerios, Alcaldias y otros', 'sigla' => 'EXT'],
            ['descripcion' => 'Representacion de la Gobernacion El Alto', 'sigla' => 'RG-EA'],
            ['descripcion' => 'Secretaria Deptal. de Turismo y Cultura', 'sigla' => 'SDTC'],
            ['descripcion' => 'Instituto Nacional de Medicina Nuclear', 'sigla' => 'INAMEN'],
            ['descripcion' => 'Juez Sumariante', 'sigla' => 'JS'],
            ['descripcion' => 'Direccion de Alerta Temprana y Prevencion de Riesgos', 'sigla' => 'DATPR'],
            ['descripcion' => 'Ventanilla de Correspondencia', 'sigla' => 'VC'],
            ['descripcion' => 'Asesoria General', 'sigla' => 'AG'],
            ['descripcion' => 'JUEZ SUMARIANTE', 'sigla' => 'JS'],
            ['descripcion' => 'Servicio Deptamental de Riego', 'sigla' => 'SEDERI'],
            ['descripcion' => 'Honorable Asamblea Legislativa Deptal. de La Paz', 'sigla' => 'HALDLP'],
            ['descripcion' => 'Secretaria Deptal. de Economia y Finanzas', 'sigla' => 'SDEF'],
            ['descripcion' => 'Secretaria Deptal. de Desarrollo Social y Comunitario', 'sigla' => 'SDDSC'],
            ['descripcion' => 'Secretaria Deptal. de Asuntos Juridicos', 'sigla' => 'SDAJ'],
            ['descripcion' => 'Secretaria Deptal. de Infraestructura Productiva y Obras Publicas', 'sigla' => 'SDIPOP'],
            ['descripcion' => 'Unidad de Desarrollo Organizacional', 'sigla' => 'UDO'],
            ['descripcion' => 'Unidad de Coordinacion con Organizaciones Sociales', 'sigla' => 'UCOS'],
            ['descripcion' => 'Direccion de Transparencia', 'sigla' => 'DT'],
            ['descripcion' => 'Direccion de Planificacion Estrategica Territorial', 'sigla' => 'DPET'],
            ['descripcion' => 'Direccion de Control de Gestion', 'sigla' => 'DCG'],
            ['descripcion' => 'Direccion de Informacion Departamental', 'sigla' => 'DID'],
            ['descripcion' => 'Direccion de Promocion Economica y Transformacion Industrial', 'sigla' => 'DPETI'],
            ['descripcion' => 'Secretaria Deptal. de Mineria y Metalurgia', 'sigla' => 'SDMM'],
            ['descripcion' => 'Ex- DMMH', 'sigla' => 'DMMH'],
            ['descripcion' => 'Direccion de Infraestructura Produccion y de Obras Publicas', 'sigla' => 'DIPOP'],
            ['descripcion' => 'Direccion Infraestructura Energetica, Electrica y Energia Alternativa', 'sigla' => 'DIEEEA'],
            ['descripcion' => 'Direccion de Desarrollo Social', 'sigla' => 'DDS'],
            ['descripcion' => 'Direccion de Salud Ambiental y Cambio Climatico', 'sigla' => 'DSACC'],
            ['descripcion' => 'Direccion de Gestion de Cuencas y Suelos', 'sigla' => 'DGCS'],
            ['descripcion' => 'Direccion de Analisis Juridico', 'sigla' => 'DAJ'],
            ['descripcion' => 'Direccion de Gestion Juridica', 'sigla' => 'DGJ'],
            ['descripcion' => 'Jefatura de Gabinete - Despacho', 'sigla' => 'JG'],
            ['descripcion' => 'Direccion Financiera', 'sigla' => 'DF'],
            ['descripcion' => 'Unidad de Presupuesto', 'sigla' => 'UP'],
            ['descripcion' => 'Secretaria Deptal. de Desarrollo Economico y Transformacion Industrial', 'sigla' => 'SDDETI'],
            ['descripcion' => 'Empresa Deptal. de Aguas de La Paz', 'sigla' => 'EDA'],
            ['descripcion' => 'Direccion de Promocion Economica y Transformacion Industrial', 'sigla' => 'DPTI'],
            ['descripcion' => 'Direccion de Culturas', 'sigla' => 'DC'],
            ['descripcion' => 'Secretaria Deptal. de los Derechos de Madre Tierra', 'sigla' => 'SDDMT'],
            ['descripcion' => 'Area de Adquisiciones', 'sigla' => 'AA'],
            ['descripcion' => 'Direccion de CODEPEDIS', 'sigla' => 'DCO'],
            ['descripcion' => 'Unidad de Contrataciones', 'sigla' => 'UC'],
            ['descripcion' => 'Unidad de Relaciones Internacionales', 'sigla' => 'URI'],
            ['descripcion' => 'Instituto Comercial Superior', 'sigla' => 'INCOS'],
            ['descripcion' => 'Direccion Departamental de Transportes y Telecomunicaciones', 'sigla' => 'DDTT'],
            ['descripcion' => 'Coordinadores Provinciales', 'sigla' => 'CP'],
            ['descripcion' => 'Area de Archivo', 'sigla' => 'AAR'],
            ['descripcion' => 'Direccion de Limites y Organizacion Territorial', 'sigla' => 'DLOT'],
            ['descripcion' => 'Direccion de Turismo', 'sigla' => 'DTU'],
            ['descripcion' => 'Direccion de Desarrollo Normativo', 'sigla' => 'DDN'],
            ['descripcion' => 'Direccion de Personeria Juridica', 'sigla' => 'DPJ'],
            ['descripcion' => 'Direccion de Recursos Naturales', 'sigla' => 'DRN'],
            ['descripcion' => 'Direccion de Gestion de Establecimientos de Salud', 'sigla' => 'DGES'],
            ['descripcion' => 'Servicio Departamental de Construccion de Obras Civiles', 'sigla' => 'SEDCOC'],
            ['descripcion' => 'Industrializacion, Produccion y Comercializacion de Mate de Coca, Infusiones combinadas y productos derivados', 'sigla' => 'INALMAMA'],
            ['descripcion' => 'Direccion Legal Administrativa', 'sigla' => 'DLA'],
            ['descripcion' => 'Direccion de PoliticaSocial', 'sigla' => 'DPS'],
            ['descripcion' => 'Instituto Departamental de Estadistica', 'sigla' => 'IDE'],
            ['descripcion' => 'Unidad de Administracion Tributaria Departamental', 'sigla' => 'UATD'],
            ['descripcion' => 'Area de Control de Peajes y Rodaje', 'sigla' => 'UCPR'],
            ['descripcion' => 'Area de Impuestos Departamentales', 'sigla' => 'AID'],
            ['descripcion' => 'Terminal de Transporte Interprovincial de la Ciudad de El Alto', 'sigla' => 'TTICEA'],
            ['descripcion' => 'Direccion de elaboracion de estudios de proyectos de preinversion', 'sigla' => 'DIEEPI'],
            ['descripcion' => 'Direccion de Gestion de Residuos Solidos', 'sigla' => 'DGRS'],
            ['descripcion' => 'Unidad de Administracion de Personal', 'sigla' => 'UAP'],
            ['descripcion' => 'Area de Activos Fijos', 'sigla' => 'AAF'],
            ['descripcion' => 'Responsable del Proceso de Contratacion de Licitacion Publica', 'sigla' => 'RPC']
        ];

        // Insertar los registros en la tabla 'branches'
        foreach ($branches as $branch) {
            Branch::create($branch);
        }
    }
}
