.PHONY: all build clean run lex test

lex_cmd = /usr/local/bin/re2c
lex_target = number.c
lex_source = number.l

cc = gcc
target = number
source = $(lex_target)

all: build

build: $(target)

lex: $(lex_target)

clean:
	@rm -f $(target) $(lex_target)

run: test

test: $(target)
	./$(target) 0xFF00

$(target): $(lex_target) $(source)
	$(cc) $(source) -o $(target)

$(lex_target): $(lex_source)
	$(lex_cmd) $(lex_source) -o $(lex_target)

