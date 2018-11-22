.PHONY: all build clean run


cc = gcc
target = power2
source = power2.c

all: build

build: $(target)

$(target): $(source)
	$(cc) $(source) -o $(target)

clean:
	@rm -f $(target)

run: $(target)
	./$(target)
