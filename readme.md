### BrightMinded Friday Challenge - Islands

Create an application that will give a JSON output with the following structure:

{
    map: int[][],
    islands: int,
}

- `map` is a randomly generated 5x5 grid of 1s and 0s. 1s represent land and 0s represent water.
- `islands` is the number of islands in the map. An island is any area of land surrounded by water and is formed by connecting adjacent lands horizontally or vertically. You can assume that the map is surrounded by water.

Examples:

```json
{
    map: [
        [0,1,1,1,1],
        [0,0,1,0,1],
        [0,0,0,0,0],
        [0,1,0,0,0],
        [0,1,0,0,0],
    ],
    islands: 2,
}
```
```json
{
    map: [
        [1,0,1,1,0],
        [1,1,0,0,0],
        [1,1,0,1,0],
        [0,1,0,0,0],
        [1,1,0,0,0],
    ],
    islands: 3,
}
```