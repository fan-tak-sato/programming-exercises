it('should have a history', function() {
  add(1, 2);
  add(3, 4);

  expect(history.last().getText()).toContain('1 + 2');
  // expect(history.first().getText()).toContain('foo'); // This is wrong!
});