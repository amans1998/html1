//ES 6
//this is my first javascript
/* hello
1 cannot be a reserved keyword
2 should be meaningfull
3 cannot start with a number
4 case sensitive
-- constants const (can not change)
-- variable
    -- primitives/value type (string, numbers, boolean, undefined, null)
    	-- let name='rahul';
    	-- let age = '25';
    	-- let order = true;
    	-- let lastName = undefined;
    	-- let middleName = 'null';
    -- reference type (object, array, function)
    	-- let name='rahul';
    	-- let age = '25';
    	-- let person ={
			name: 'rahul',
			age: 25
    	};

    	// dot notation (access the properties)
    	person.name = 'rahul';
    	consol.log(person.name);

    	// bracket notation
    	person['name'] = 'hem';
    	consol.log(person.name);
*/
			//document.write('i am on the web page');
		/*let fastName;
        let name='rahul'; //string
        name = 'mohit';
    	let age = 'hello'; // number
    	let order = true; //boolean
    	let lastName = undefined; //undefine
    	let middleName = null; //null
    	console.log(name);
		*/
    	let person = {
			name: 'rahul',
			LastName: 'saklani',
			age: 25
    	};
        
        // dot notation (access the properties)
    	// person.name = 'mohit';


    	// bracket notation
    	let select = 'LastName';
    	//console.log(person.LastName);

    	//array
		let studentsName = ['mohit','vivek', 'rahul', 'Rex'];
		//studentsName[1] = 'vivek';
		//console.log(studentsName.length);

		function demo(name){
		//	console.log('my name is ' + name);
		}
		demo('mohit');

		function square(number){
			return number * number 
			}
		//let result = square(10);
		console.log(square(10));
    	