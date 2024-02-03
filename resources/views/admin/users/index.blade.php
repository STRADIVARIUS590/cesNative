   <livewire:navbar>
        @livewireStyles
        @livewireScripts 
                                
                                        Usuarios
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
                                                @foreach($users as $school)
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
                                 
                                        