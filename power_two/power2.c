//
//  main.c
//  power2
//
//  Created by gongpengjun on 2018/11/22.
//  Copyright © 2018 gongpengjun. All rights reserved.
//

#include <stdio.h>
#include <stdint.h>

/* https://stackoverflow.com/questions/466204/rounding-up-to-next-power-of-2
 Find the nearest next power of 2 number, For example if the input is 789, the output should be 1024.
 
 source: https://graphics.stanford.edu/~seander/bithacks.html#RoundUpPowerOf2
 It works by copying the highest set bit to all of the lower bits, and then adding one,
 which results in carries that set all of the lower bits to 0 and one bit beyond the highest set bit to 1.
 If the original number was a power of 2, then the decrement will reduce it to one less, so that we round up to the same original value.
*/
uint32_t upper_power_of_two(uint32_t v) {
    v -= 1;
    v |= v >> 1;
    v |= v >> 2;
    v |= v >> 4;
    v |= v >> 8;
    v |= v >> 16;
    v += 1;
    return v;
}

int main(int argc, const char * argv[]) {
    uint32_t x_array[] = {15, 63, 789, 1024, 200000};
    for (int i = 0; i < sizeof(x_array) / sizeof(uint32_t); i++) {
        uint32_t x = x_array[i];
        uint32_t v = upper_power_of_two(x);
        printf("the nearest next power of 2 number (%d) is (%d)\n", x, v);
    }
    return 0;
}
