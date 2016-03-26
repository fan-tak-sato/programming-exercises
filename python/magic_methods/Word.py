class Word(str):
	'''Class for words, defining comparison based on word length.'''
	def __new__(cls, word):
		# Note that we have to use __new__. This is because str is an immutable
		# type, so we have to initialize it early (at creation)
		if ' ' in word:
			print "Value contains spaces. Truncating to first space."
			word = word[:word.index(' ')] # Word is now all chars before first space
			return str.__new__(cls, word)

	# Defines behavior for the greater-than operator, >.
	def __gt__(self, other):
		return len(self) > len(other)

	# Defines behavior for the less-than operator, <.
	def __lt__(self, other):
		return len(self) < len(other)

	# Defines behavior for the greater-than-or-equal-to operator, >=
	def __ge__(self, other):
		return len(self) >= len(other)

	# Defines behavior for the less-than-or-equal-to operator, <=
	def __le__(self, other):
		return len(self) <= len(other)

