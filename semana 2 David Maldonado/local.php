<?php  
public function index()
		{
			return \App\Frutas::all();
		}
	
		public function show($id)
		{
			return \App\Frutas::find($id);
			//find llama con eloquent a select where pk = id
		}
		
		//funciones para soportar POST
		public function store(Request $request)
		{
			return \App\Frutas::create($request->all());
			
		}
		
		
		public function update(Request $request,$id)
		{
			$row = \App\Frutas::findOrFail($id);
			$row->update($request->all());
			
			return $row;
		}
		
		//funciones para soportar DELETE
		public function delete($id)
		{
			$row = \App\Calificaciones::findOrFail($id);
			$row->delete();
			//if(!$row)
			return 204;
        }
        
?>