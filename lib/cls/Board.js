/**
 * Created by ryanswitzer on 5/5/15.
 */

function Board(boards) {
    this.boardZero = [
        [
            new Cell(6,1),
            new Cell(5,1),
            new Cell(4,0),
            new Cell(8,0),
            new Cell(7,0),
            new Cell(9,0),
            new Cell(2,0),
            new Cell(3,1),
            new Cell(1,1)
        ],
        [
            new Cell(7,1),
            new Cell(2,0),
            new Cell(9,0),
            new Cell(3,1),
            new Cell(6,0),
            new Cell(1,0),
            new Cell(5,0),
            new Cell(8,1),
            new Cell(4,1)
        ],
        [
            new Cell(1,1),
            new Cell(8,0),
            new Cell(3,0),
            new Cell(4,0),
            new Cell(2,1),
            new Cell(5,1),
            new Cell(7,0),
            new Cell(9,0),
            new Cell(6,0)
        ],
        [
            new Cell(5,0),
            new Cell(4,0),
            new Cell(7,0),
            new Cell(2,0),
            new Cell(1,0),
            new Cell(8,1),
            new Cell(9,0),
            new Cell(6,1),
            new Cell(3,0)
        ],
        [
            new Cell(3,0),
            new Cell(9,1),
            new Cell(2,1),
            new Cell(5,0),
            new Cell(4,0),
            new Cell(6,0),
            new Cell(8,1),
            new Cell(1,1),
            new Cell(7,0)
        ],
        [
            new Cell(8,0),
            new Cell(6,1),
            new Cell(1,0),
            new Cell(9,1),
            new Cell(3,0),
            new Cell(7,0),
            new Cell(4,0),
            new Cell(2,0),
            new Cell(5,0)
        ],
        [
            new Cell(9,0),
            new Cell(1,0),
            new Cell(5,0),
            new Cell(6,1),
            new Cell(8,1),
            new Cell(4,0),
            new Cell(3,0),
            new Cell(7,0),
            new Cell(2,1)
        ],
        [
            new Cell(2,1),
            new Cell(7,1),
            new Cell(8,0),
            new Cell(1,0),
            new Cell(5,0),
            new Cell(3,1),
            new Cell(6,0),
            new Cell(4,0),
            new Cell(9,1)
        ],
        [
            new Cell(4,1),
            new Cell(3,1),
            new Cell(6,0),
            new Cell(7,0),
            new Cell(9,0),
            new Cell(2,0),
            new Cell(1,0),
            new Cell(5,1),
            new Cell(8,1)
        ]
    ];
    
    this.boardOne = [
        this.loadBoard([9,0,1,1,4,1,6,1,7,1,8,0,2,0,3,0,5,0]),
        this.loadBoard([2,1,5,0,3,0,4,0,9,0,1,1,8,1,6,0,7,1]),
        this.loadBoard([6,0,7,0,8,0,3,0,5,0,2,1,4,1,9,0,1,0]),
        this.loadBoard([5,0,4,1,7,0,2,0,6,0,3,0,1,1,8,1,9,1]),
        this.loadBoard([3,1,9,0,1,0,8,0,4,0,7,0,6,0,5,0,2,1]),
        this.loadBoard([8,1,6,1,2,1,5,0,1,0,9,0,3,0,7,1,4,0]),
        this.loadBoard([1,0,3,0,6,1,9,1,2,0,5,0,7,0,4,0,8,0]),
        this.loadBoard([7,1,8,0,5,1,1,1,3,0,4,0,9,0,2,0,6,1]),
        this.loadBoard([4,0,2,0,9,0,7,0,8,1,6,1,5,1,1,1,3,0])
    ];

    this.boardTwo = [
        this.loadBoard([8,0,9,1,4,0,3,0,2,0,6,0,5,1,1,0,7,0]),
        this.loadBoard([6,1,1,0,5,0,7,1,4,1,8,0,9,0,2,0,3,1]),
        this.loadBoard([3,1,2,1,7,1,9,0,1,0,5,0,4,0,6,0,8,0]),
        this.loadBoard([9,1,8,1,1,0,5,0,7,0,2,0,6,0,3,1,4,0]),
        this.loadBoard([4,1,3,0,2,1,6,1,8,0,1,0,7,1,5,0,9,1]),
        this.loadBoard([7,0,5,1,6,0,4,0,9,0,3,0,2,0,8,1,1,1]),
        this.loadBoard([2,0,6,0,9,0,8,0,3,0,4,0,1,1,7,1,5,1]),
        this.loadBoard([1,1,4,0,3,0,2,0,5,1,7,1,8,0,9,0,6,1]),
        this.loadBoard([5,0,7,0,8,1,1,0,6,0,9,0,3,0,4,1,2,0])
    ];
    
    this.boardThree = [
        this.loadBoard0,([5,0,8,0,6,0,2,0,1,1,9,0,3,0,4,1,7,0]),
        this.loadBoard([7,1,2,1,9,0,3,1,4,1,5,0,1,0,6,0,8,1]),
        this.loadBoard([1,0,3,1,4,0,7,0,8,1,6,0,9,0,2,1,5,0]),
        this.loadBoard([4,1,6,0,3,0,9,0,7,1,8,0,5,0,1,1,2,0]),
        this.loadBoard([9,1,1,0,5,1,6,0,3,0,2,0,8,1,7,0,4,0]),
        this.loadBoard([8,0,7,1,2,0,4,0,4,1,1,0,6,0,3,0,9,1]),
        this.loadBoard([3,1,4,0,1,0,5,0,9,1,7,0,2,0,8,1,6,0]),
        this.loadBoard([6,1,5,0,8,0,1,0,2,1,4,1,7,0,9,1,3,1]),
        this.loadBoard([2,0,9,1,7,0,8,0,6,1,3,0,4,0,5,0,1,0])
    ];
    
    this.boardFour = [
        this.loadBoard([2,0,6,0,3,0,7,0,5,1,8,0,4,0,1,1,9,1]),
        this.loadBoard([8,0,1,0,7,0,4,0,2,1,9,0,6,1,3,1,5,1]),
        this.loadBoard([5,0,4,0,9,1,1,1,6,0,3,0,7,1,8,0,2,0]),
        this.loadBoard([7,0,3,0,8,1,5,0,4,1,2,0,9,1,6,0,1,1]),
        this.loadBoard([6,1,9,0,4,0,8,0,3,0,1,0,2,0,5,0,7,1]),
        this.loadBoard([1,1,2,0,5,1,6,0,9,1,7,0,8,1,4,0,3,0]),
        this.loadBoard([9,0,8,0,6,1,3,0,7,0,5,1,1,1,2,0,4,0]),
        this.loadBoard([4,1,5,1,2,1,9,0,1,1,6,0,3,0,7,0,8,0]),
        this.loadBoard([3,1,7,1,1,0,2,0,8,1,4,0,5,0,9,0,6,0])
    ];
    
    this.boardFive = [
        this.loadBoard([5,1,3,1,4,0,6,0,7,1,8,0,9,0,1,0,2,0]),
        this.loadBoard([6,1,7,0,2,0,1,1,9,1,5,1,3,0,4,0,8,0]),
        this.loadBoard([1,0,9,1,8,1,3,0,4,0,2,0,5,0,6,1,7,0]),
        this.loadBoard([8,1,5,0,9,0,7,0,6,1,1,0,4,0,2,0,3,1]),
        this.loadBoard([4,1,2,0,6,0,8,1,5,0,3,1,7,0,9,0,1,1]),
        this.loadBoard([7,1,1,0,3,0,9,0,2,1,4,0,8,0,5,0,6,1]),
        this.loadBoard([9,0,6,1,1,0,5,0,3,0,7,0,2,1,8,1,4,0]),
        this.loadBoard([2,0,8,0,7,0,4,1,1,1,9,1,6,0,3,0,5,1]),
        this.loadBoard([3,0,4,0,5,0,2,0,8,1,6,0,1,0,7,1,9,1])
    ];
    
    this.boardSix = [
        this.loadBoard([5,1,8,0,3,0,1,0,7,0,2,0,4,0,6,1,9,0]),
        this.loadBoard([7,1,9,1,1,0,2,1,3,0,4,0,6,0,8,0,5,0]),
        this.loadBoard([1,0,6,0,7,1,4,0,5,1,9,0,3,0,2,0,8,0]),
        this.loadBoard([7,1,9,1,1,0,2,1,3,0,4,0,6,0,8,0,5,0]),
        this.loadBoard([4,0,5,0,8,1,6,0,1,1,7,0,2,0,9,0,3,1]),
        this.loadBoard([2,0,3,1,6,1,8,0,9,0,5,0,7,1,1,0,4,1]),
        this.loadBoard([3,1,1,1,4,0,7,0,6,1,8,0,9,0,5,1,2,1]),
        this.loadBoard([8,0,7,0,9,0,5,1,2,0,3,1,1,0,4,1,6,1]),
        this.loadBoard([6,0,2,0,5,1,9,1,4,0,1,0,8,0,3,0,7,0])
    ];

    this.boardSeven = [
        this.loadBoard([1,0,7,1,3,1,8,0,9,1,2,0,6,0,4,1,5,0]),
        this.loadBoard([9,1,8,0,6,0,4,1,5,0,3,1,2,0,1,0,7,1]),
        this.loadBoard([4,0,5,0,2,0,6,1,1,0,7,0,9,0,3,0,8,1]),
        this.loadBoard([8,0,4,1,1,0,2,0,7,0,5,0,3,1,6,1,9,0]),
        this.loadBoard([7,1,6,0,5,0,9,0,3,0,4,0,8,0,2,0,1,1]),
        this.loadBoard([3,0,2,1,9,1,1,0,8,0,6,0,7,0,5,1,4,0]),
        this.loadBoard([5,1,9,0,7,0,3,0,6,0,1,1,4,0,8,0,2,0]),
        this.loadBoard([6,1,1,0,4,0,7,1,2,0,8,1,5,0,9,0,3,1]),
        this.loadBoard([2,0,3,1,8,0,5,0,4,1,9,0,1,1,7,1,6,0]),
    ];

    this.boardEight = [
        this.loadBoard([7,1,2,0,5,0,3,0,8,1,6,0,9,0,1,1,4,1]),
        this.loadBoard([8,0,4,1,3,0,1,1,2,0,9,0,7,0,5,0,6,0]),
        this.loadBoard([9,0,6,0,1,0,5,0,7,1,4,0,3,1,8,1,2,1]),
        this.loadBoard([4,0,3,0,9,0,2,1,5,0,1,0,8,0,6,1,7,0]),
        this.loadBoard([1,0,7,0,2,1,4,1,6,1,8,1,5,1,3,0,9,0]),
        this.loadBoard([6,0,5,1,8,0,7,0,9,0,3,1,2,0,4,0,1,0]),
        this.loadBoard([5,1,9,1,6,1,8,0,4,1,7,0,1,0,2,0,3,0]),
        this.loadBoard([3,0,8,0,7,0,6,0,1,0,2,1,4,0,9,1,5,0]),
        this.loadBoard([2,1,1,1,4,0,9,0,3,1,5,0,6,0,7,0,8,1])
    ];

    this.boardNine = [
        this.loadBoard([4,0,3,0,5,0,2,1,6,1,9,0,7,1,8,0,1,1]),
        this.loadBoard([6,1,8,1,2,0,5,0,7,1,1,0,4,0,9,1,3,0]),
        this.loadBoard([1,1,9,1,7,0,8,0,3,0,4,1,5,1,6,0,2,0]),
        this.loadBoard([8,1,2,1,6,0,1,1,9,0,5,0,3,0,4,1,7,0]),
        this.loadBoard([3,0,7,0,4,1,6,1,8,0,2,1,9,1,1,0,5,0]),
        this.loadBoard([9,0,5,1,1,0,7,0,4,0,3,1,6,0,2,1,8,1]),
        this.loadBoard([5,0,1,0,9,1,3,1,2,0,6,0,8,0,7,1,4,1]),
        this.loadBoard([2,0,4,1,8,0,9,0,5,1,7,0,1,0,3,1,6,1]),
        this.loadBoard([7,1,6,0,3,1,4,0,1,1,8,1,2,0,5,0,9,0])
    ];

    this.boardTest = [
        this.loadBoard([4,1,3,1,5,1,2,1,6,1,9,1,7,1,8,1,1,1]),
        this.loadBoard([6,1,8,1,2,1,5,1,7,1,1,1,4,1,9,1,3,1]),
        this.loadBoard([1,1,9,1,7,1,8,1,3,1,4,1,5,1,6,1,2,1]),
        this.loadBoard([8,1,2,1,6,1,1,1,9,1,5,1,3,1,4,1,7,1]),
        this.loadBoard([3,1,7,1,4,1,6,1,8,1,2,1,9,1,1,1,5,1]),
        this.loadBoard([9,1,5,1,1,1,7,1,4,1,3,1,6,1,2,1,8,1]),
        this.loadBoard([5,1,1,1,9,1,3,1,2,1,6,1,8,1,7,1,4,1]),
        this.loadBoard([2,1,4,1,8,1,9,1,5,1,7,1,1,1,3,1,6,1]),
        this.loadBoard([7,1,6,1,3,1,4,1,1,1,8,1,2,1,5,1,9,0])
    ];
    
    this.boards = [
        this.boardZero,
        this.boardOne,
        this.boardTwo,
        this.boardThree,
        this.boardFour,
        this.boardFive,
        this.boardSix,
        this.boardSeven,
        this.boardEight,
        this.boardNine
    ];
}

Board.prototype.loadBoard = function(tempArray){
    row = [
        new Cell(tempArray[0],tempArray[1]),
        new Cell(tempArray[2],tempArray[3]),
        new Cell(tempArray[4],tempArray[5]),
        new Cell(tempArray[6],tempArray[7]),
        new Cell(tempArray[8],tempArray[9]),
        new Cell(tempArray[10],tempArray[11]),
        new Cell(tempArray[12],tempArray[13]),
        new Cell(tempArray[14],tempArray[15]),
        new Cell(tempArray[16],tempArray[17])
    ];
    return row;
};