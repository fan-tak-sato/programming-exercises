In the Builder Pattern a director and a builder work together to build an object. The director controls the building and specifies what parts and variations will go into an object. The builder knows how to assemble the object given specification. 

In this example we have a director, HTMLPageDirector, which is given a builder, HTMLPageBuilder. The director tells the builder what the pageTitle will be, what the pageHeading will be, and gives multiple lines of text for the page. The director then has the bulder do a final assembly of the parts, and return the page.
