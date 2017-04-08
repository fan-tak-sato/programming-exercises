let books = [
	{ 'id': 1, 'store_id': 1, 'name': '/url/vector_a' },
	{ 'id': 2, 'store_id': 2, 'name': '/url/vector_b' },
	{ 'id': 3, 'store_id': 3, 'name': '/url/vector_c' }
];

let filteredBooks: any = books.filter(book => book.store_id === 2);

console.log(filteredBooks[0]);