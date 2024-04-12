def reverse_strings(my_phrase):
    my_phrase_as_array = list(my_phrase)
    new_phrase = list()
    
    for index in reversed(my_phrase_as_array):
        new_phrase.append(index)

    return new_phrase

print(reverse_strings("Hola mundo"))
