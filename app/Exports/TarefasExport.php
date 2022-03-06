<?php

namespace App\Exports;
use App\Models\tarefa;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class TarefasExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return auth()->user()->tarefas()->get();
       
    }

    public function headings(): array { //declarando o tipo de retorno
       return ['ID da Tarefa',
         'Tarefa Data Limite Conclusão', 
         'Data Criação',
         'Data Atualização'
        ];
        
    }
}
