@extends('layouts.layout')

@section('content')
    <div class="content">
        {{--        banner --}}
            <img src="{{URL::asset('./image/banners/'.trans('commons.lang-banner').'/postgrade/criminalforensic_sciences.png')}}" width="100%">
        {{--        section ID --}}
        <div class="section-content">
            <div class="d-flex justify-content-start">
                <img id="img-section" src="{{URL::asset('./image/views/'.trans('commons.lang-banner').'/academic-offers/OfAc-02.png')}}">
                <h4>Ciencias Penales y Criminalísticas</h4>
            </div>
        </div>
        {{--  information   --}}
        <div class="content m-4">
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Perfil de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El Doctorado en Ciencias Penales y Criminalísticas está diseñado bajo un concepto de transdisciplinariedad. Ello concierne, como lo indica el prefijo " trans", a lo que simultáneamente es entre las disciplinas, a través de las diferentes disciplinas y más allá de toda disciplina. Su finalidad es la comprensión del mundo presente, uno de cuyos imperativos es la unidad del conocimiento. Bajo esta orientación, se pretende atender la complejidad de las Ciencias Jurídicas  y del conocimiento donde se sitúa la importancia académica de éste programa de Doctorado, que pretende el estudio profundo y sistematizado del elemento Penal y Criminalístico.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Requisitos de admisión:</h5>
                </div>
                <div class="card-text">
                    <ul>
                        <li><p>Copia de acta de nacimiento.</p></li>
                        <li><p>Copia de cédula ampliada.</p></li>
                        <li><p>Copia del título de pregrado y   de las notas certificadas.</p></li>
                        <li><p>Copia del título potsgrado y de las notas certificadas.</p></li>
                        <li><p>Los títulos deben estar autenticados, si es universidad pública, por la misma universidad; y si es universidad privada, por el Ministerio de Educación Universitaria, sean de pregrado o postgrado.</p></li>
                        <li><p>Dos fotos tamaño carnet.</p></li>
                        <li><p>Resumen curricular en un máximo de dos cuartillas.</p></li>
                    </ul>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Objetivos de la carrera</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Elevar la calidad académica, el desempeño profesional, la calidad humana, ética y moral en el marco de la dinámica social, política y económica del país.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Dirigido a:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>La creación del Doctorado en Ciencias Penales y Criminalísticas, cobra importancia, además, para la formación del profesional del derecho, de las ciencias policiales y disciplinas afines, quien se verá favorecido con competencias que benefician su espectro de funciones y de desempeño tanto en el ámbito de la administración de justicia, como en el ejercicio privado de la profesión.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Modalidad</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>El Doctorado en Ciencias Penales y Criminalísticas es un curso de postgrado, presencial, semipresencial y online.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Título que se otorga:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Doctor en Ciencias Penales y Criminalísticas.</p>
                </div>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Plan de estudios</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre I</b></p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Cuatro trimestres de doce (12) semanas de clases, con Unidades Crédito (U/C) fijas.</p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Criminalística I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Interpretación Constitucional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Derecho Penal Superior</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Procesal Penal I</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre II</b></p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ciencias Penitenciarias</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Derecho Procesal Penal II</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Criminalística II</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electiva</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre III</b></p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Derecho Penal Internacional</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Derecho Probatorio</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Teorías Criminológicas</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Electivas</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Trimestre IV</b></p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Dactiloscopia</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Derecho Penal del Ambiente</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Metodología Cualitativa</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Planificación Estratégica</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
                <div class="card-text" id="card-b-author">
                    <p><b>Electivas</b></p>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Unidad Curricular</th>
                            <th scope="col">UC</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ciencias Forenses</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Delincuencia Organizada</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Inspección Técnica</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Política Criminal</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Régimen Jurídico de la Policía en Venezuela</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>Responsabilidad Social de los Organismos de Seguridad</td>
                            <td>2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="card text-black text-justify border-0 m-2">
                <div class="card-text font-weight-bold">
                    <h5 id="name-funders">Información de contacto:</h5>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>unimar@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>postgrado@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>conveniounimarucsar@gmail.com </p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>mariaelizabeth.gutierrez@unimar.edu.ve</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>800-UNIMAR (800-864627).</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>+58 412- 0937902</p>
                </div>
                <div class="card-text" id="card-b-author">
                    <p>Ubicación: Universidad de Margarita, El Valle del Espíritu Santo, Sector Toporo, Isla de Margarita, Estado Nueva Esparta, Venezuela. Rif: J-30660040-0.<p>
                </div>
            </div>
        </div>
    </div>
@endsection
