// OBJECT LITERALS
// ------------------------------

let person = {
  firstName: 'james',
  age: 30,
  hobbies: ['music', 'movies', 'sports'],
  lastname:'bond'
}

// document.write(person.firstName+'----'+person.lastname)

// document.write(person.hobbies[2])

// person.fun();

// Get single value
// -----------------------
// document.writeln(person.firstName)

// Get array value
// ----------------------
// document.writeln(person.hobbies[1]);

// Get embedded object
// ----------------------------
// document.writeln(person.address.city);

// Add property
// -----------------------
// person.email = 'jdoe@gmail.com';

// Array of objects
// ------------------
let t = [
  {
    id: 1,
    task: 'Complete the assignment',
    isComplete: false
  },
  {
    id: 2,
    task: 'Dinner with friend',
    isComplete: false
  },
  {
    id: 3,
    task: 'Watch NF',
    isComplete: true,
    
  }
];





for (a of t)
{
  document.write(a.task+"--"+a.isComplete+"<br>")
}


// Get specific object value
// ----------------------------------
// for( t of todos)
// document.writeln(t.text+"<br>");

// Format as JSON
// ---------------------
// document.writeln(JSON.stringify(todos));





