{{-- <x-layouts-app> --}}
     <livewire:navbar>
         @livewireStyles
        @livewireScripts
    Escuelas
    
    <details>
        <summary>Agregar</summary>
        <livewire:school-form :school="123123"/>  
    </details>
                                                                                                        <table>
                                                                                                            <thead>
                                                                                                                <th>
                                                                                                                    <tr>
                                                                                                                        <td>
                                                                                                                            ID
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            
                                                                                                                            NOMBRE
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                </th>
                                                                                                            </thead>
                                                                                                            
                                                                                                            <tbody>
                                                                                                                @foreach($schools as $school)
                                                                                                                <tr>
                                                                                                                    <td>
                                                                                                                        {{
                                                                                                                            $school['id']
                                                                                                                        }}
                                                                                                                        </td>
                                                                                                                        <td>
                                                                                                                            {{
                                                                                                                                $school['name']
                                                                                                                            }}
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    @endforeach
                                                                                                                </tbody>
                                                                                                            </table>
        
{{-- <x-layouts-app/> --}}