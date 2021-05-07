<?php
  if(isset($_GET['t']))
  {
    $topic = trim($_GET['t']);
  }else{
    $topic = "i";
  }
  if(isset($_GET['ty']))
  {
    $type = trim($_GET['ty']);
  }else{
    $type = "n";
  }
  if(isset($_GET['n']))
  {
    $number = intval(trim($_GET['n']));
  }else{
    $number = 0;
  }
  $introduction = array(
                        array("title" => "Introduction to Data Structures.", "link" => "https://www.youtube.com/embed/92S4zgXN17o")
                       );
  $stack_videos = array(
                  array("title" => "Data Structures: Introduction to Stack.", "link" => "https://www.youtube.com/embed/F1F2imiOJfk"),
                  array("title" => "Data Structures: Arrays and implementation of stack.", "link" => "https://www.youtube.com/embed/sFVxsglODoo"),
                  array("title" => "Data Structures: Linked List implementation of stacks.", "link" => "https://www.youtube.com/embed/MuwxQ2IB8lQ"),
                  array("title" => "Reverse a string or Linked List using stack.", "link" => "https://www.youtube.com/embed/hNP72JdOIgY"),
                  array("title" => "Check for balanced parentheses using stack.", "link" => "https://www.youtube.com/embed/QZOLb0xHB_Q"),
                  array("title" => "Infinix, Prefix and Postfix.", "link" => "https://www.youtube.com/embed/jos1Flt21is"),
                  array("title" => "Evaluation of Prefix and Postfix expressions using stack.", "link" => "https://www.youtube.com/embed/MeRb_1bddWg"),
                  array("title" => "Infinix to postfix using stack.", "link" => "https://www.youtube.com/embed/vq-nUF0G4fI")
                );
  $linked_list_videos = array(
                        array("title" => "Data Structures: List as abstract data type.", "link" => "https://www.youtube.com/embed/HdFG8L1sajw"),
                        array("title" => "Introduction to Linked Lists.", "link" => "https://www.youtube.com/embed/NobHlGUjV3g"),
                        array("title" => "Data Structures: Arrays Vs Linked Lists.", "link" => "https://www.youtube.com/embed/lC-yYCOnN8Q"),
                        array("title" => "Linked List Implementation in C/C++.", "link" => "https://www.youtube.com/embed/vcQIFT79_50"),
                        array("title" => "Linked List in C/C++ - Inserting a node at beginning.", "link" => "https://www.youtube.com/embed/cAZ8CyDY56s"),
                        array("title" => "Linked List in C/C++ - Inserting note at nth position.", "link" => "https://www.youtube.com/embed/IbvsNF22Ud0"),
                        array("title" => "Linked List in C/C++ - Delete a node at nth position.", "link" => "https://www.youtube.com/embed/Y0n86K43GO4"),
                        array("title" => "Reverse a Linked List - Iterative Method.", "link" => "https://www.youtube.com/embed/sYcOK51hl-A"),
                        array("title" => "Print elements of a Linked List in forward and reverse order.", "link" => "https://www.youtube.com/embed/K7J3nCeRC80"),
                        array("title" => "Reverse a Linked List using recursion.", "link" => "https://www.youtube.com/embed/KYH83T4q6Vs"),
                        array("title" => "Data Structures: Introduction to Doubly Linked Lists.", "link" => "https://www.youtube.com/embed/JdQeNxWCguQ"),
                        array("title" => "Doubly Linked List Implementation in C/C++.", "link" => "https://www.youtube.com/embed/VOQNf1VxU3Q")
                      );
  $graphs_videos = array(
                  array("title" => "Data Structures: Introduction to graphs.", "link" => "https://www.youtube.com/embed/gXgEDyodOJU"),
                  array("title" => "Data Structures: Properties of graphs.", "link" => "https://www.youtube.com/embed/AfYqN3fGapc"),
                  array("title" => "Graph Representation part 01 - Edge List.", "link" => "https://www.youtube.com/embed/ZdY1Fp9dKzs"),
                  array("title" => "Graph Representation part 02 - Adjacency Matrix.", "link" => "https://www.youtube.com/embed/9C2cpQZVRBA"),
                  array("title" => "Graph Representation part 03 - Adjancency List.", "link" => "https://www.youtube.com/embed/k1wraWzqtvQ")
                 );
  $trees_videos = array(
                  array("title" => "Data Structures: Introduction to Trees.", "link" => "https://www.youtube.com/embed/qH6yxkw0u78"),
                  array("title" => "Data Structures: Binary Tree.", "link" => "https://www.youtube.com/embed/H5JubkIy_p8"),
                  array("title" => "Data Structures: Binary Search Tree.", "link" => "https://www.youtube.com/embed/pYT9F8_LFTM"),
                  array("title" => "Binary Search Tree implementation in C/C++.", "link" => "https://www.youtube.com/embed/COZK7NATh4k"),
                  array("title" => "BST Implementation - memory allocation in stack.", "link" => "https://www.youtube.com/embed/hWokyBoo0aI"),
                  array("title" => "Find min and max element in a binary search tree.", "link" => "https://www.youtube.com/embed/Ut90klNN264"),
                  array("title" => "Find height of a binary tree.", "link" => "https://www.youtube.com/embed/_pnqMz5nrRs"),
                  array("title" => "Binary tree traversal - breadth-first and depth-first search.", "link" => "https://www.youtube.com/embed/9RHO6jU--GU"),
                  array("title" => "Binary Tree: Level Order Traversal.", "link" => "https://www.youtube.com/embed/86g8jAQug04"),
                  array("title" => "Binary Tree Traversal: Preorder, Inorder, Postorder.", "link" => "https://www.youtube.com/embed/gm8DUJJhmY4"),
                  array("title" => "Check if a binary tree is binary search tree or not.", "link" => "https://www.youtube.com/embed/yEwSGhSsT0U"),
                  array("title" => "Delete a node from Binary Search Tree.", "link" => "https://www.youtube.com/embed/gcULXE7ViZw"),
                  array("title" => "Inorder Successor in a binary search tree.", "link" => "https://www.youtube.com/embed/5cPbNCrdotA")
                );
  $queues_videos = array(
                  array("title" => "Data Structures: Introduction to Queues.", "link" => "https://www.youtube.com/embed/XuCbpw6Bj1U"),
                  array("title" => "Data Structures: Array implementation of Queue.", "link" => "https://www.youtube.com/embed/okr-XE8yTO8"),
                  array("title" => "Data Structures: Linked List implementation of Queue.", "link" => "https://www.youtube.com/embed/A5_XdiK4J8A")
                 );
  $lists_notes_display = "
        <h1 id=\"list\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Lists</h1>
        <p>A list is a collection of items where each item holds a relative position with respect to the others.</p>
        <p>Lists can be divided into ordered and unordered list</p>
        <h3 id=\"linked_list_unordered\" style=\"color: #5cb874;\">Unordered List</h3>
        <h5>The structure of an unordered list, as described above, is a collection of items where each item holds a relative position with respect to the others. Below is a list of operations used with unordered lists.</h5>
        <li>List() creates a new list that is empty. It needs no parameters and returns an empty list.</li>
        <li>add(item) adds a new item to the list. It needs the item and returns nothing. Assume the item is not already in the list.</li>
        <li>remove(item) removes the item from the list. It needs the item and modifies the list. Assume the item is present in the list.</li>
        <li>search(item) searches for the item in the list. It needs the item and returns a Boolean value.</li>
        <li>is_empty() tests to see whether the list is empty. It needs no parameters and returns a Boolean value.</li>
        <li>size() returns the number of items in the list. It needs no parameters and returns an integer</li>
        <li>append(item) adds a new item to the end of the list making it the last item in the collection. It needs the item and returns nothing. Assume the item is not already in the list</li>
        <li>index(item) returns the position of item in the list. It needs the item and returns the index. Assume the item is in the list.</li>
        <li>insert(pos, item) adds a new item to the list at position pos. It needs the item and returns nothing. Assume the item is not already in the list and there are enough existing items to have position pos.</li>
        <li>pop() removes and returns the last item in the list. It needs nothing and returns an item. Assume the list has at least one item</li>
        <li>pop(pos) removes and returns the item at position pos. It needs the position and returns the item. Assume the item is in the list.</li>
        <h2 id=\"linked_list_ordered\" style=\"color: #5cb874;\">Orderded Linked List</h2>
        <p>The structure of an ordered list is a collection of items where each item holds a relative position that is based upon some underlying characteristic of the item.</p>
        <p>The ordering is typically either ascending or descending and we assume that list items have a meaningful comparison operation that is already defined.</p>
        <p>Many of the ordered list operations are the same as those of the unordered list. Except this operation
          <li>OrderedList() which creates a new ordered list that is empty. It needs no parameters and returns an empty list.</li>
        </p>
        <p> In order to implement an unordered and ordered list , we will construct what is commonly known as a linked list.</p>
        <h2 id=\"linked_list_def\" style=\"color: #5cb874;\">Linked List</h2>
        <p> It consists of data items called nodes. Each data element contains two field; information field and a link field connected to another data items.</p>
        <p> Linked list is divided into three:
          <li><a href=\"#singly_linked_list\">Singly linked list</a></li>
          <li><a href=\"#doubly_linked_list\">Doubly linked list</a></li>
          <li><a href=\"#circularly_linked_list\">Circularly linked list</a></li>
        </p>
        <h3 id=\"singly_linked_list\" style=\"color: #5cb874;\">Singly Linked List</h3>  
        <p>A singly linked list is a concrete data structure consisting of a sequence of nodes</p>    
        <p>Each node stores
          <li>The element</li>
          <li>A link to the next node</li>
        </p>     
        <h3 id=\"doubly_linked_list\" style=\"color: #5cb874;\">Doubly Linked List</h3>  
        <p>A doubly linked list is often more convenient!</p>    
        <p>Each node stores
          <li>The element</li>
          <li>A link to the previous node.</li>
          <li>A link to the next node.</li>
        </p> 
        <h3 id=\"circularly_linked_list\" style=\"color: #5cb874;\">Circularly Linked List</h3>  
        <p>This is a linked list where the \"link to the next node\" in the last node points to the first node.</p>    
        <p>Each node stores
          <li>The element</li>
          <li>A link to the next node and this link, in the last node, points to the first node.</li>
          <li>Each node can also have a link to the previous node but for the first node, this link must point to the last node.</li>
        </p>
  ";

  $default_notes_display = "
          <div class=\"col-lg-4 col-md-6 content-item\">
            <span style=\"color: green; font-size: 20pt;\">Stacks</span>
            <p>A stack is an ordered list in which all insertions and deletions are made at one end called the top.</p>
            <a href=\"index.php?ty=n&t=st\" class=\"btn-get-started animate__animated animate__fadeInUp scrollto\">Read More</a>
          </div>
          <div class=\"col-lg-4 col-md-6 content-item\" style=\"margin-top:25px;\">
            <span style=\"color: green; font-size: 20pt;\">Queues</span>
            <p>A queue is an ordered group of homogeneous items of elements.</p>
            <a href=\"index.php?ty=n&t=q\" class=\"btn-get-started animate__animated animate__fadeInUp scrollto\">Read More</a>
          </div>
          <div class=\"col-lg-4 col-md-6 content-item\" style=\"margin-top:25px;\">
            <span style=\"color: green; font-size: 20pt;\">Lists</span>
            <p>A list is a collection of items where each item holds a relative position with respect to the others.</p>
            <a href=\"index.php?ty=n&t=l\" class=\"btn-get-started animate__animated animate__fadeInUp scrollto\">Read More</a>
          </div>
          <div class=\"col-lg-4 col-md-6 content-item\" style=\"margin-top:25px;\">
            <span style=\"color: green; font-size: 20pt;\">Sorting</span>
            <p>Sorting is a process that organizes or rearranges a collection of data into either ascending or descending order.</p>
            <a href=\"index.php?ty=n&t=so\" class=\"btn-get-started animate__animated animate__fadeInUp scrollto\">Read More</a>
          </div>
          <div class=\"col-lg-4 col-md-6 content-item\" style=\"margin-top:25px;\">
            <span style=\"color: green; font-size: 20pt;\">Searching</span>
            <p>The process used to find the location of a target among a list of objects.</p>
            <a href=\"index.php?ty=n&t=se\" class=\"btn-get-started animate__animated animate__fadeInUp scrollto\">Read More</a>
          </div>
          <div class=\"col-lg-4 col-md-6 content-item\" style=\"margin-top:25px;\">
            <span style=\"color: green; font-size: 20pt;\">Trees</span>
            <p>A tree structure means that the data are organized so that items of information are related by branches.</p>
            <a href=\"index.php?ty=n&t=t\" class=\"btn-get-started animate__animated animate__fadeInUp scrollto\">Read More</a>
          </div>
          <div class=\"col-lg-4 col-md-6 content-item\" style=\"margin-top:25px;\">
            <span style=\"color: green; font-size: 20pt;\">Graphs</span>
            <p>A data structure that consists of a set of nodes (vertices) and a set of edges that relate the nodes to each other.</p>
            <a href=\"index.php?ty=n&t=g\" class=\"btn-get-started animate__animated animate__fadeInUp scrollto\">Read More</a>
          </div>
  ";

  $queue_notes_display = "
        <h1 id=\"queue_def\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Queues</h1>
        <p>A queue is an ordered group of homogeneous items of elements.</p>
        <p>Queues have two ends:
          <ul>
            <li>Elements are added at one end called the rear .</li>
            <li>Elements are removed from the other end called the front.</li>
          </ul>
        </p>
        <p>The element added first is also removed first (FIFO: First In, First Out).</p>
        <p>A queue is structured as an ordered collection of items which are added at one end, called the “rear,” and removed from the other end, called the “front.”</p>
        <h2 id=\"queue_operations\" style=\"color: #5cb874;\">Operations on a queue.</h2>
        <li>Queue() creates a new queue that is empty. It needs no parameters and returns an empty queue.</li>
        <li>enqueue(item) adds a new item to the rear of the queue. It needs the item and returns nothing.</li>
        <li> dequeue() removes the front item from the queue.It needs no parameters and returns the item. The queue is modified.</li>
        <li>is_empty() tests to see whether the queue is empty. It needs no parameters and returns a Boolean value.</li>
        <li>size() returns the number of items in the queue. It needs no parameters and returns an integer</li>
        <h3 id=\"queue_applications\" style=\"color: #5cb874;\">Applications of a queue</h3>
        <li>Applied in printers to send print jobs to the printer</li>
        <li>Programs / processes to be run</li>
        <li>Network data packets to send</li>
        <li>Modeling a line of customers or clients</li>
        <li>Cars at a gas station (or on an assembly line)</li>
        <li>People on an escalator or waiting in a line</li>
        <li>Message queue in Windows</li>
        <li>I/O buffer</li>
  ";

  $stack_notes_display = "
        <h1 id=\"def_stack\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Stacks</h1>
        <p>A stack is an ordered list in which all insertions and deletions are made at one end called the top.</p>
        <p>The operations are carried out in such a way that the last element which is inserted will be the first element out</p>
        <p>Such order is called Last In First Out or \"LIFO\"</p>
        <h2 id=\"stack_opertions\" style=\"color: #5cb874;\">Stack Operations</h2>
        <li>Stack() - creates a new stack that is empty. It needs no parameters and returns an empty stack</li>
        <li>push(item) -adds a new item to the top of the stack. It needs the item and returns nothing</li>
        <li>pop() - removes the top item from the stack. It needs no parameters and returns the item. The stack is modified</li>
        <li>peek() - returns the top item from the stack but does not remove it. It needs no parameters. The stack is not modified.</li>
        <li>is_empty() - tests to see whether the stack is empty. It needs no parameters and returns a Boolean value.</li>
        <li>size() - returns the number of items on the stack. It needs no parameters and returns an integer</li>
        <h2 id=\"stack_primary_operations\" style=\"color: #5cb874;\">Stack Primary Applications.</h2>
        <ul>
          <li>Push <br />Add an element to the top of the stack</li>
          <li>Pop <p>Remove the element at the top of the stack</p></li>
        </ul>
        <h2 id=\"stack_applications\" style=\"color: #5cb874;\">Stack Applications</h2>
        <li>Pile of books</li>
        <li>Plate trays</li>
        <li>Program execution stack</li>
        <li>Evaluating expressions</li>
        <li>Functional calls/recursion</li>
        <li>Undo in an editor</li>
        <li>Balanced parenthesis</li>
  ";

  $sorting_notes_display = "
        <h1 id=\"sorting_def\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Sorting</h1>
        <p>Sorting is a process that organizes or rearranges a collection of data into either ascending or descending order.</p>
        <p>The list should be homogeneous, that is the elements in the list should be the same type.</p>
        <p>Some of the sorting algorithms that we will be talking about, that we will be analyzing are <span><i>Bubble sort</i></span>, <span><i>Selection sort</i></span>, <span><i>Insertion sort</i></span>, <span><i>Merge Sort</i></span>, <span><i>Quick sort</i></span> etc.</p>
        <p>We often classify sorting algorithms based on some parameters forexample the following:</p>
        <ul>
          <li>Time Complexity:
            <p>The measure of rate of growth of time taken by an algorithm with respect to input size. Some algorithms will be relatively faster than the others.</p>
          </li>
          <li>Space Complexity or Memory usage:
            <p>Some sorting algorithms are like insertion sort, use constant amount of memory to rearrange the elements in the list, while some sorting algorithms like <i>Merge sort</i>, use extra memory to temporarily store data and the memory usage grows with input size.</p>
          </li>
          <li>Stability:
            <p>A sorting algorithm is said to be stable if two objects with equal keys appear in the same order in sorted output as they appear in the input array to be sorted.</p>
          </li>
          <li>Internal sort or External sort:
            <p>When all the records that need to be sorted are in the memory or RAM, such a sort is called an <b>Internal sort</b>.</p>
            <p>If the records are on auxiliary storage like disk and tapes, quite often it is not possible to get all of them in the main memory in one go, then we call such a sort an <b>External sort</b>.</p>
          </li>
          <li>Recursive or Non-Recursive:
            <p>Some sorting algorithms like <i>Quick sort</i> and <i>Merge sort</i> are recursive while other like <i>Insertion sort</i> and <i>Selection sort</i> are non-recursive.</p>
          </li>
        </ul>
        <h2 id=\"selection_sort\" style=\"color: #5cb874;\">Selection Sort</h2>
        <p>The list is divided into two sublists, sorted and unsorted, which are divided by an imaginary wall.</p>
        <p>We find the smallest element from the unsorted sublist and swap it with the element at the beginning of the unsorted data.</p>
        <p>After each selection and swap, the imaginary wall between the two sublists move one element ahead, increasing the number of sorted elements and decreasing the number of unsorted ones.</p>
        <p>Each time we move one element from the unsorted sublist to the sorted sublist, we say that we have completed a sort pass.</p>
        <p>A list of n elements requires n-1 passes to completely rearrange the data.</p>
        <p>In general, we compare keys and move items (or exchange items) in a sorting algorithm (which uses key comparisons).</p>
        <p>So, to analyze a sorting algorithm we should count the number of key comparisons and the number of moves.</p>
        <p>In selection sort function, the outer for loop executes n-1 times.</p>
        <p>We invoke swap function once at each iteration.
          <li>Total Swaps: n-1</li>
          <li>Total Moves: 3*(n-1) (Each swap has three moves)</li>
        </p>
        <p>The inner for loop executes the size of the unsorted part minus 1 (from 1 to n-1), and in each iteration we make one key comparison.</p>
        <p>Number of key comparisons = 1+2+...+n-1 = n*(n-1)/2 .
          <li>So, Selection sort is <i>O(n^2)</i>.</li>
          <li>The best case, the worst case, and the average case of the selection sort algorithm are same. All of them are <i>O(n^2)</i>.</li>
          <li>This means that the behavior of the selection sort algorithm does not depend on the initial organization of data.</li>
          <li>Since <i>O(n^2)</i> grows so rapidly, the selection sort algorithm is appropriate only for small n.</li>
          <li>A selection sort could be a good choice if data moves are costly but key comparisons are not costly (short keys, long records).</li>
        </p>
        <h2 id=\"insertion_sort\" style=\"color: #5cb874;\">Insertion Sort.</h2>
        <p>Insertion sort is slower than quick sort, but not as slow as bubble sort, and it is easy to understand.</p>
        <p>Insertion sort works the same way as arranging your hand when playing cards.</p>
        <p>Insertion sort is a simple sorting algorithm that is appropriate for small inputs.</p>
        <p>The list is divided into two parts: sorted and unsorted.
          <li>In each pass, the first element of the unsorted part is picked up, transferred to the sorted sublist, and inserted at the appropriate position.</li>
        </p>
        <p>A list of n elements will take at most n-1 passes to sort the data.</p>
        <li>Running time depends on not only the size of the array but also the contents of the array.</li>
        <li>Best case <span><i>O(n)</i></span>.</li>
        <li>Worst case <span><i>O(n^2)</i></span>.</li>
        <li>Average case <span><i>O(n^2)</i></span>.</li>
        <h2 id=\"bubble_sort\" style=\"color: #5cb874;\">Bubble Sort.</h2>
        <p>The bubble sort makes multiple passes through a list.</p>
        <p>It compares adjacent items and exchanges those that are out of order.</p>
        <p>Each pass through the list places the next largest value in its proper place.</p>
        <li>Best case <span><i>O(n)</i></span>.</li>
        <li>Worst case <span><i>O(n^2)</i></span>.</li>
        <li>Average case <span><i>O(n^2)</i></span>.</li>
        <h2 id=\"merge_sort\" style=\"color: #5cb874;\">Merge Sort.</h2>
        <p><i>Merge sort</i> algorithm is one of two important divide-and-conquer sorting algorithms (the other one is quicksort)</p>
        <p>It is a recursive algorithm.
          <li>Divides the list into halves</li>
          <li>Sort each halve separately, and</li>
          <li>Then merge the sorted halves into one sorted array.</li>
        </p>
        <p>But, <i>Merge sort</i> requires an extra array whose size equals to the size of the original array</p>
        <p><i>Merge sort</i> is extremely efficient algorithm with respect to time.</p>
        <li>Worst case <span><i>O(n * log2n)</i></span>.</li>
        <li>Average case <span><i>O(n * log2n)</i></span>.</li>
        <h2 id=\"quick_sort\" style=\"color: #5cb874;\">Quick Sort.</h2>
        <p><i>Quick sort</i> is a Divide and Conquer algorithm.</p>
        <p>It picks an element as pivot and partitions the given array around the picked pivot. There are many different versions of <i>Quick sort</i> that pick pivot in different ways.
          <li>Always pick first element as pivot.</li>
          <li>Always pick last element as pivot.</li>
          <li>Pick a random element as pivot.</li>
          <li>Pick median as pivot.</li>
        </p>
        <p>Although the worst case behavior is not so good, its average case behavior is much better than its worst case.</p>
        <p>The quick-sort algorithm consists of the following three steps:
          <li>Divide: Partition the list. 
            <p>To partition the list, we first choose some element from the list for which we hope about half the elements will come before and half after. Call this element the pivot.</p>
          </li>
          <li>Recursion:
            <p>Recursively sort the sublists separately.</p>
          </li>
          <li>Conquer:
            <p>Put the sorted sublists together by a simple concatenation.</p>
          </li>
        </p>
        <li>Worst case <span><i>O(n^2)</i></span>.</li>
        <li>Best case <span><i>O(n*log2n)</i></span>.</li>
        <li>Average case <span><i>O(n*log2n)</i></span>.</li>
  ";

  $searching_notes_display = "
        <h1 id=\"searching_def\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Searching</h1>
        <p>The process used to find the location of a target among a list of objects.</p>
        <p>A question you should always ask when selecting a search algorithm is “How fast does the search have to be?” The reason is that, in general, the faster the algorithm is, the more complex it is.</p>
        <p>Let’s explore the following search algorithms, keeping speed in mind.
          <li>Sequential (linear) search.</li>
          <li>Binary search.</li>
        </p>
        <h2 id=\"unordered_search\" style=\"color: #5cb874;\">Unordered Linear Search</h2>
        <p>Search an unordered array of integers for a value and return its index if the value is found. Otherwise, return -1.</p>
        <h2 id=\"ordered_search\" style=\"color: #5cb874;\">Ordered Linear Search</h2>
        <p>Search an ordered array of integers for a value and return its index if the value is found; Otherwise, return -1.</p>
        <p>Linear search can stop immediately when it has passed the possible position of the search value.</p>
        <h4 style=\"color: #5cb874;\"><i>How long it takes</i></h4>
        <li>Best case <span><i>O(1)</i></span>.</li>
        <li>Worst case <span><i>O(n)</i></span>.</li>
        <li>Average case <span><i>O(n)</i></span>.</li>
        <h2 id=\"binary_search\" style=\"color: #5cb874;\">Binary Search</h2>
        <p>Binary search is based on the “divide-and-conquer” strategy which works as follows:
          <li>Start by looking at the middle element of the array.</li> 
          <li>If the value it holds is lower than the search element, eliminate the first half of the array from further consideration.</li>
          <li>If the value it holds is higher than the search element, eliminate the second half of the array from further consideration.</li>
          <li>Repeat this process until the element is found, or until the entire array has been eliminated.</li>
        </p>
        <p>Search an ordered array of integers for a value and return its index if the value is found. Otherwise, return -1.</p>
        <p>Binary search skips over parts of the array if the search value cannot possibly be there.</p>
        <p>Binary search only works if the array is already sorted.</p>
        <h4 style=\"color: #5cb874;\"><i>How fast is it</i></h4>
        <p>So, the time complexity of binary search is <i>O(log2n)</i> which is exactly the same as <i>O(log n)</i>.</p>
  ";

  $graphs_notes_display = "
        <h1 id=\"graph_def\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Graphs</h1>
        <p>A data structure that consists of a set of nodes (vertices) and a set of edges that relate the nodes to each other</p>
        <p>The set of edges describes relationships among the vertices</p>
        <h2 id=\"formal_def\" style=\"color: #5cb874;\">Formal definitions of a graph</h2>
        <p>A graph G is defined as follows:
          <li><i>G = (V, E)</i></li>
          <li><i>V(G)</i>: a finite, nonempty set of vertices</li>
          <li><i>E(G)</i>: a set of edges (pairs of vertices)</li>
        </p>
        <p>A graph <i>G = (V, E)</i> consists of an ordered pair consisting of a set of vertices V and a set of edges E, such that each edge in E is a connection between a pair of vertices in V.</p>
        <p>The number of vertices is written |V|, and the number of edges is written <i>|E|</i>. <i>|E|</i> can range from zero to a maximum of <i>|V|2 − |V|</i></p>
        <p>A graph with relatively few edges is called sparse, while a graph with many edges is called dense</p>
        <p>A graph containing all possible edges is said to be complete.</p>
        <p>A graph with labels associated with its vertices is called a labeled graph.</p>
        <p>Two vertices are adjacent if they are joined by an edge. Such vertices are also called neighbors.</p>
        <p>The size of a graph is the number of nodes or vertices in it</p>
        <p>The <span>length</span> of a path is the number of edges it contains.</p>
        <p>The empty graph has size zero (no nodes)</p>
        <p>An edge connecting Vertices U and V is written (U, V). Such an edge is said to be incident on Vertices U and V.</p>
        <p>Associated with each edge may be a cost or weight. Graphs whose edges have weights are said to be weighted.</p>
        <p>A <span>subgraph</span> S is formed from graph G by selecting a subset Vs of G’s vertices and a subset Es of G’s edges such that for every edge E in Es, both of its vertices are in Vs.</p>
        <p>The <span>degree</span> of a node is the number of edges it has</p>
        <p>The <span>in-degree</span> of a node is the number of in-edges it has</p>
        <p>The <span>out-degree</span> of a node is the number of outedges it has</p>
        <p>A subset of the nodes of the graph is a connected component (or just a component) if there is a path from every node in the subset to every other node in the subset</p>
        <p>There are two kinds of graphs: <li>directed graphs (sometimes called digraphs)</li> <li>and undirected graphs</li></p>
        <p>A graph without cycles is called <span>acyclic</span>. Thus, a directed graph without cycles is called a directed acyclic graph or DAG</p>
        <p><span>A free tree</span> is a connected, undirected graph with no simple cycles. An equivalent definition is that a free tree is connected and has <i>|V| − 1</i> edges</p>
        <h2 id=\"directed graphs\" style=\"color: #5cb874;\">Directed graphs</h2>
        <p>A graph with edges directed from one vertex to another is called a directed graph or <span>digraph</span>.</p>
        <p>Warning: if the graph is directed, the order of the vertices in each edge is important!</p>
        <div class=\"images\"><img src=\"directed graph.png\" alt=\"\"></div>
        <p>If a directed edge goes from node S to node D, we call S the source and D the destination of the edge
          <li>The edge is an out-edge of S and an in-edge of D</li>
          <li>S is a predecessor of D, and D is a successor of S</li>
        </p>
        <p>The number of edges in a complete directed graph with N vertices is <span><i>N * (N-1)</i></span></p>
        <h2 id=\"undirected_graph\" style=\"color: #5cb874;\">Undirected Graph</h2>
        <p>An undirected graph is connected if there is a path from every node to every other node</p>
        <img src=\"images/undirected graph.png\" alt=\"\">
        <p>A directed graph is strongly connected if there is a path from every node to every other node</p>
        <p>directed graph is weakly connected if the underlying undirected graph is connected</p>
        <p>The number of edges in a complete undirected graph with N vertices is <span><i>N * (N-1) / 2</i></span></p>
        <h2 id=\"adjacent_matrix\" style=\"color: #5cb874;\">Adjacent Matrix</h2>
        <p>One simple way of representing a graph is the adjacency matrix</p>
        <p>To Represent a graph with a two-dimensional array G
          <li><i>G[i][j] = 1</i> if there is an edge from node i to node j</li>
          <li><i>G[i][j] = 0</i> if there is no edge from node i to node j</li>
        </p>
        <p>If the graph is undirected, matrix is symmetric</p>
        <p>Can represent edges labeled with a cost as well:
          <li><i>G[i][j]</i> = cost of link between i and j</li>
          <li>if there is no direct link, <i>G[i][j] = ∞</i></li>
        </p>
        <p>A 2-D array has a mark at <i>[i][j]</i> if there is an edge from node i to node j</p>
        <p>The adjacency matrix is symmetric about the main diagonal</p>
        <p>An adjacency matrix can equally well be used for digraphs (directed graphs)</p>
        <p>A 2-D array has a mark at <i>[i][j]</i> if there is an edge from node i to node j</p>
        <img src=\"images/adj matrix1.png\" alt=\"\">
        <img src=\"images/adj matrix2.png\" alt=\"\">
        <h2 id=\"adjacent_list\" style=\"color: #5cb874;\">Adjacent list</h2>
        <p>The adjacency list is an array of linked lists. The array is <i>|V|</i> items long, with position i storing a pointer to the linked list of edges for Vertex vi.</p>
        <p>This linked list represents the edges by the vertices that are adjacent to Vertex vi.</p>
        <div><img src=\"images/matrix.png\" alt=\"\"></div>
  ";
  $trees_notes_display = "
        <h1 id=\"def_tree\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Trees</h1>
        <p>A tree structure means that the data are organized so that items of information are related by branches.</p>
        <p>Consists of nodes with a parent-child relation.</p>
        <p>Some applications include:
          <ul>
            <li>Organization charts</li>
            <li>File systems</li>
            <li>Programming environments</li>
          </ul>
        </p>
        <p>Some Tree terminologies include:
          <ul>
            <li><span>Root</span> - the top node in the tree</li>
            <li><span>Child</span> - A node directly connected to another node when moving away from the Root.</li>
            <li><span>Parent</span> - The converse notion of a child</li>
            <li><span>Sibling</span> - A group of nodes with the same parent.</li>
            <li><span>Descendant</span> - A node reachable by repeated proceeding from parent to child.</li>
            <li><span>Ancestor</span> - A node reachable by repeated proceeding from child to parent.</li>
            <li><span>Leaf</span> - A node with no children.</li>
            <li><span>Internal node</span> - A node with at least one child.</li>
            <li><span>External node</span> - A node without children</li>
            <li><span>Edge</span> - The connection between one node and another.</li>
            <li><span>Degree</span> - The number of sub trees of a node.</li>
            <li><span>Path</span> - A sequence of nodes and edges connecting a node with a descendant.</li>
            <li><span>Level</span> - The level of a node is defined by 1 + (the number of connections between the node and the root).</li>
            <li><span>Height of a node</span> - The height of a node is the number of edges on the longest path between that node and a leaf.</li>
            <li><span>Height of a tree</span> - The height of a tree is the height of its root node.</li>
            <li><span>Depth</span> - The depth of a node is the number of edges from the tree's root node to the node.</li>
            <li><span>Forest</span> - A forest is a set of n ≥ 0 disjoint trees.</li>
          </ul>
        </p>
        <h2 id=\"tree_representation\" style=\"color: #5cb874;\">Tree Representation</h2>
        <p>
          <p>The root comes first, followed by a list of sub-trees</p>
          <p>( A ( B ( E ( K, L ), F ), C ( G ), D ( H ( M ), I, J ) ) )</p>
          <li>List Representation</li>
          <img src=\"images/list_tree.png\" alt=\"\">
          <li>Left Child-Right Sibling Representation</li>
          <img src=\"images/left_right_tree.png\" alt=\"\">
        </p>
        <h2 id=\"binary_trees\" style=\"color: #5cb874;\">Binary Trees</h2>
        <p>A nonempty binary tree has a root element and the remaining elements (if any) are partitioned into two binary trees</p>
        <p>They are called the left and right subtrees of the binary tree</p>
        <p>The BinaryTree ADT extends the Tree ADT, i.e., it inherits all the methods of the Tree ADT</p>
        <span><h3 style=\"color: #5cb874;\"><i>Difference Between a Tree & a Binary Tree</i></h3></span>
        <ul>
          <li>A binary tree may be empty; a tree cannot be empty.</li>
          <li>No node in a binary tree may have a degree more than 2, whereas there is no limit on the degree of a node in a tree.</li>
          <li>The subtrees of a binary tree are ordered; those of a tree are not ordered.</li>
        </ul>
        <span><h3 style=\"color: #5cb874;\"><i>Maximum Number of Nodes in a Binary Tree</i></h3></span>
        <p>The maximum number of nodes on depth i of a binary tree is 2i, i>=0.</p>
        <p>The maximum number of nodes in a binary tree of height k is 2k+1-1, k>=0.</p>
        <span><h3 style=\"color: #5cb874;\"><i>Full Binary Tree</i></h3></span>
        <p>A full binary tree of a given height k has 2k+1–1 nodes.</p>
        <img src=\"images/full_binary_tree.png\" alt=\"full binary tree image\" width:600px height:400px>
        <span><h3 style=\"color: #5cb874;\"><i>Binary Tree (Strict/Proper binary Trees)</i></h3></span>
        <p>A binary tree is a strict or proper binary tree when each node can have either 2 or 0 children</p>
        <img src=\"images/proper_binary_tree.png\" alt=\"\">
        <span><h3 style=\"color: #5cb874;\"><i>Complete Binary Tree</i></h3></span>
        <p>A binary tree is said to be complete if all levels except possibly the last is completely filled and all nodes are as far left as possible</p>
        <img src=\"complete_binary_tree.png\" alt=\"\">
        <h2 id=\"binary_tree_traversals\" style=\"color: #5cb874;\">Binary Tree Traversals</h2>
        <p>A traversal of a tree T is a systematic way of accessing, or “visiting,” all the positions of T.</p>
        <ol>
          <li> Preorder Traversals
            <img src=\"images/preorder_traversal.png\" alt=\"\">
            <p>visit the root then traverse in preorder the children</p>
          </li>
          <li>Postorder Traversals <p>traverse in postorder the children then visit the root</p></li>
          <img src=\"images/post_order.png\" alt=\"\">
          <li>Breadth-First Tree Traversal</li>
          <p>Another approach is to traverse a tree so that we visit all the positions at depth d before we visit the positions at depth d+1.</p>
          <p>We use a queue to produce a FIFO (i.e., First In First Out) semantics for the order in which we visit nodes.</p>
          <img src=\"images/bfs_traversal.png\" alt=\"\">
          <p> The overall running time is O(n), due to the n calls to enqueue and n calls to dequeue.</p>
          <li>Depth-first traversal</li>
          <p>In the depth-first traversal processing process along a path from the root through one child to the most distant descendant of that first child before processing a second child.</p>
        </ol>
        <img src=\"images/traversals.png\" alt=\"\">
        <p>The space complexity of each of the four traversal algorithm is O(n)</p>
        <p>The time complexity of each of the four traversal algorithm is O(n)</p>
        <h2 id=\"binary_tree_operations\" style=\"color: #5cb874;\">Binary Tree Operations</h2>
        <ul>
          <li>Determine the height</li>
          <li>Determine the number of nodes</li>
          <li>Make a copy</li>
          <li>Determine if two binary trees are identical</li>
          <li>Display the binary tree</li>
          <li>Delete a tree</li>
          <li>If it is an expression tree, evaluate the expression</li>
          <li>If it is an expression tree, obtain the parenthesized form of the expression</li>
        </ul>
        <h2 id=\"binary_search_trees\" style=\"color: #5cb874;\">Binary Search Trees</h2>
        <p>A binary tree in which each node value of all the nodes in left subtree is lesser or equal and value of all the nodes in the right subtree is greater.</p>
        <p>Stores keys in the nodes in a way so that searching, insertion and deletion can be done efficiently.</p>
        <p>For every node X, all the keys in its left subtree are smaller than the key value in X, and all the keys in its right subtree are larger than the key value in X</p>
        <ul>
          <li>Searching BST</li>
          <p>If we are searching for 15, then we are done.</p>
          <p>If we are searching for a key < 15, then we should search in the left subtree.</p>
          <p>If we are searching for a key > 15, then we should search in the right subtree.</p>
          <img src=\"images/binary_search.png\" alt=\"\">
          <li>Insert</li>
          <p>Proceed down the tree as you would with a find</p>
          <p>If X is found, do nothing (or update something)</p>
          <p>Otherwise, insert X at the last spot on the path traversed</p>
          <img src=\"images/insert_binary.png\" alt=\"\">
          <li>Delete</li>
          <p>When we delete a node, we need to consider how we take care of the children of the deleted node</p>
          <p>This has to be done such that the property of the search tree is maintained.</p>
        </ul>
        <h2 id=\"euler_tours\" style=\"color: #5cb874;\">Euler Tours</h2>
        <p>Euler tour is the path along the tree that begins at the root and ends at the root, traversing each edge exactly twice — once to enter the subtree at the other endpoint and once to leave it.</p>
        <p>You can think of an Euler tour as just being a depth first traversal where we return to the root at the end.</p>
        <p>Walk around the tree and visit each node three times:
          <li>On the left (preorder)</li>
          <li>From below (inorder)</li>
          <li>On the right (postorder)</li>
        </p>
        <img src=\"images/euler.png\" alt=\"\">
  ";

  $hashing_notes_display = "
        <h1 id=\"def_hash\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Hashing</h1>
        <p>Hashing is the technique used for performing almost constant time search in case of insertion, deletion and find operation.</p>
        <p>The essence of hashing is to facilitate the next level searching method when compared with the linear or binary search.</p>
        <p>It is the process of mapping large amount of data item to a smaller table with the help of a hashing function.</p>
        <p>The advantage of this searching method is its efficiency to handle vast amount of data items in a given collection (i.e. collection size).</p>
        <h2 id=\"hash_tables\" style=\"color: #5cb874;\">Hash Tables</h2>
        <p>A hash table, or a hash map, is a data structure that associates keys (names) with values (attributes)</p>
        <p>The hash table contains key values with pointers to the corresponding records which helps in retrieval of information in an efficient manner.</p>
        <p>The basic idea is to place key value into location in the hash table and this location will be calculated from the key value itself using the hash function.</p>
        <p>Let us assume a function f and apply this function to K, then it returns ‘i’ that is f(k)=i. The ith entry of the access table gives the location of record with key value K.</p>
        <p>The hash table is an array which contains key values with pointers to the corresponding records.</p>
        <p>The basic idea here is to place a key inside the hash table, and the location/index of that key will be calculated from the given key value itself.</p>
        <p>The one to one correspondence between a key value and index in the hash table is known as <span>hashing</span>.</p>
        <p>The idea is that we run our data through the hash function, and then store the data in the element of the array represented by the returned hash code</p>
        <img src=\"images/hash.png\" alt=\"\">
        <h2 id=\"hash_operations\" style=\"color: #5cb874;\">Hash Operations</h2>
        <span><h3 style=\"color: #5cb874;\"><i>Inserting a New Record</i></h3></span>
        <p>In order to insert a new record, the key must somehow be converted to an array index</p>
        <p>The index is called the <span>hash value</span> of the key</p>
        <p>The hash value is used for the location of the new record.</p>
        <h2 id=\"hash_applications\" style=\"color: #5cb874;\">Hash Table Applications</h2>
        <ul>
          <li>Keeping track of customer account information at a bank</li>
          <p>Search through records to check balances and perform transactions</p>
          <li>Keep track of reservations on flights</li>
          <p>Search to find empty seats, cancel/modify reservations</p>
          <li>Search engine</li>
          <p>Looks for all documents containing a given word</p>
        </ul>
        <h2 id=\"hash_functions\" style=\"color: #5cb874;\">Choosing Hash functions</h2>
        <p>A hash function maps keys to small integers (buckets). An ideal hash function maps the keys to the integers in a random-like manner, so that bucket values are evenly distributed even if there are regularities in the input data.</p>
        <p>The hash function:
          <ul>
            <li>Must be simple to compute.</li>
            <li>Must distribute the keys evenly among the cells.</li>
            <li>Minimize collision.</li>
            <li>Resolve any collision</li>
            <li>Use only the data being hashed</li>
            <li>Generate very different hash codes for very similar data</li>
            <li>Uniformly distribute data</li>
          </ul>
        </p>
        <img src=\"images/hash_functions.png\" alt=\"\">
        <h2 id=\"hash_functions_generation\" style=\"color: #5cb874;\">Approaches to generate Hash Functions</h2>
        <ol>
          <li>Truncation Method</li>
          <p>Ignore a part of the key and use the remaining part directly as the index</p>
          <p>Ex:1 If a hash table contains 999 entries at the most or 999 different key indexes may be kept, then a hash function may be defined such that from an eight digit integer 12345678, first, second and fifth digits from the right may be used to define a key index i.e. 478, which is the key position in the hash lookup table where this element will be inserted. Any other key combination may be used.</p>
          <p>Ex:2 If students have an 9-digit identification number, take the last 3 digits as the table position</p>
          <li>Mid Square Method</li>
          <p>In Mid-Square method, the key element is multiplied by itself to yield the square of the given key</p>
          <p>If the hash table contains maximum 999 entries, then three digits from the result of square may be chosen as a hash key for mapping the key element in the lookup table.</p>
          <p>Example: If the input is the number 4567, squaring yields an 8-digit number, 20857489. The middle two digits of this result are 57. All digits of the original key value (equivalently, all bits when the number is viewed in binary) contribute to the middle two digits of the squared value. Thus, the result is not dominated by the distribution of the bottom digit or the top digit of the original key value.</p>
          <li>Folding Method</li>
          <p>Partition the key into several parts and combine the parts in a convenient way (often addition or multiplication) to obtain the index.</p>
          <p>Ex-1: An eight digit integer can be divided into groups of three, three and two digits (or any other combination) the groups added together and truncated if necessary to be in the proper range of indices. Hence 12345678 maps to 123+456+78 = 657, since any digit can affect the index, it offers a wide distribution of key values.</p>
          <p>Ex-2: Split a 9-digit number into three 3-digit numbers, and add them e.g. 925371622 becomes 925 + 376 + 622 = 1923</p>
          <li>Modular Method</li>
          <p>For mapping a given key element in the hash table, mod operation of individual key is calculated. The remainder denotes particular address position of each element.</p>
          <p>The result so obtained is divided by an integer, usually taken to be the size of the hash table to obtain the remainder as the hash key to place that element in the lookup table.</p>
          <p>Map a key k into one of the m slots by taking the remainder of k divided by m <span>h(k) = k mod m</span></p>
        </ol>
        <h2 id=\"hash_collisions\" style=\"color: #5cb874;\">Collisions in Hash Tables</h2>
        <p>Two or more keys hash to the same slot!!</p>
        <p>For a given set K of keys
          <ul>
            <li>If |K| ≤ m, collisions may or may not happen, depending on the hash function</li>
            <li>If |K| > m, collisions will definitely happen (i.e., there must be at least two keys that have the same hash value)</li>
          </ul>
        </p>
        <p>Avoiding collisions completely is hard, even with a good hash function</p>
        <p>There are several methods for dealing with collision:
          <ul>
            <li>Separate chaining</li>
            <p>The idea is to keep a list of all elements that hash to the same value.</p>
            <li>Open addressing</li>
          </ul>
        </p>
        <ul>
          <li><span>Linear probing</span></li>
          <p>In this method, if we have a collision, we try to place the data in the next consecutive element in the array (wrapping around to the beginning if necessary) until we find a vacancy.</p>
          <p>That way, if we don’t find what we are looking for in the first location, at least hopefully the element is somewhere nearly.</p>
          <p>Linear probing is subject to a problem called <span> clustering</span>. Once there’s a miss, two adjacent cells will contains data, making it more likely in the future that the cluster will grow.</p>
          <p>Even if we switch to another probing technique, we are still limited. We can only store as much data as we have locations in our array.</p>
          <span>When a collision occurs, look elsewhere in the table for an empty slot</span>
        </ul>
  ";

  $tower_of_hanoi_implementation = "
        <h1 id=\"def_tower_of_hanoi\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Tower Of Hanoi</h1>
        <div style=\"width: 80%; margin: 0 auto;\">
          <p>The Tower of Hanoi: The goal is to move the blocks from the red pole (source, also pole 1) to the blue pole (destination, also pole 3). You can use the auxilliary pole (gree pole, also pole 2) while doing this. Check the list below for usage:</p>
          <ul>
            <li>To reset the pole, insert the number of blocks you want to reset with (3 to 5) in the input and then press the reset button</li>
            <li>To move a block, insert the number of pole you want to move a block from (1, 2 or 3; Source, Auxilliary or Destination respectively) followed by a hyphen (-) then the pole you want to move the block to (still; 1, 2 or 3) then press the move button. The input \"1-2\" moves the top block from red to green (source to auxilliary).</li>
            <li>To check the status of the game, if it is complete or incomplete, press the check button.</li>
          </ul>
          <ul id=\"stack1\" style=\"display: block; width: 200px; border-bottom: 3px solid red; float: left;\">
          </ul>
          <ul id=\"stack2\" style=\"display: block; width: 200px; border-bottom: 3px solid green; float: left;\">
          </ul>
          <ul id=\"stack3\" style=\"display: block; width: 200px; border-bottom: 3px solid blue; float: left;\">
          </ul>
        </div>
        <div style=\"clear: both;  height: 0;\"></div>
        <div style=\"width: 400px; margin: 0 auto;\">
          <input maxlength=\"10\" type=\"text\" id=\"input\" placeholder=\"Input\" style=\"width: 150px; outline: 0; color: #5cb874; border-radius: 15px; border: 1px solid #5cb874; padding: 5px 10px; float: left;\" />
          <p style=\"display: block; width: 200px; padding: 5px 10px; margin-left: 20px; float: left;\">Output: <i id=\"output\" style=\"color: #5cb874;\">Null</i></p> 
        </div>
        <div style=\"clear: both;\"></div>
        <div style=\"clear: both; margin: 0 auto; width: 500px;\">
          <a onclick=\"tower_of_hanoi.reset(parseInt(document.getElementById('input').value)); document.getElementById('output').innerHTML = 'Null'; tower_of_hanoi.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Reset</a>
          <a onclick=\"document.getElementById('output').innerHTML = tower_of_hanoi.move(parseInt(document.getElementById('input').value.split('-')[0])-1, parseInt(document.getElementById('input').value.split('-')[1])-1); tower_of_hanoi.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Move</a>
          <a onclick=\"document.getElementById('output').innerHTML = tower_of_hanoi.check(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Check</a>
        </div>
        ";

  $fibonacci_implementation = "
        <h1 id=\"def_fibonacci\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Fibonacci Sequence</h1>
        <div style=\"width: 80%; margin: 0 auto;\">
          <p>The fibonacci sequence is 0, 1, 1, 2, 3, 5, . . . . .; The next number is obtained by adding the previous two numbers in the sequence. Usage:</p>
          <ul>
            <li>Insert any number n in the input and press calculate and the output will have the nth number in the Fibonacci sequence.</li>
          </ul>
          <ul id=\"fibonacci\">
          </ul>
        </div>
        <div style=\"width: 400px; margin: 0 auto; clear: both;\">
          <input maxlength=\"10\" type=\"text\" id=\"input\" placeholder=\"Input\" style=\"width: 150px; outline: 0; color: #5cb874; border-radius: 15px; border: 1px solid #5cb874; padding: 5px 10px; float: left;\" />
          <p style=\"display: block; width: 200px; padding: 5px 10px; margin-left: 20px; float: left;\">Output: <i id=\"output\" style=\"color: #5cb874;\">Null</i></p> 
        </div>
        <div style=\"clear: both;\"></div>
        <div style=\"clear: both; margin: 0 auto; width: 500px;\">
          <a onclick=\"document.getElementById('output').innerHTML = fibonacci(document.getElementById('input').value); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Calculate</a>
        </div>
  ";

  $factorial_implementation = "
        <h1 id=\"def_factorial\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Factorials</h1>
        <div style=\"width: 80%; margin: 0 auto;\">
          <p>A factorial of a number is the product of that number with every number below it, factorials can only be calculated for natural numbers. Usage</p>
          <ul>
            <li>Write the number you want to get the factorial of in input and then press calculate and the output will contain the factorial of that number.</li>
          </ul>
          <ul id=\"factorial\">
          </ul>
        </div>
        <div style=\"width: 400px; margin: 0 auto; clear: both;\">
          <input maxlength=\"10\" type=\"text\" id=\"input\" placeholder=\"Input\" style=\"width: 150px; outline: 0; color: #5cb874; border-radius: 15px; border: 1px solid #5cb874; padding: 5px 10px; float: left;\" />
          <p style=\"display: block; width: 200px; padding: 5px 10px; margin-left: 20px; float: left;\">Output: <i id=\"output\" style=\"color: #5cb874;\">Null</i></p> 
        </div>
        <div style=\"clear: both;\"></div>
        <div style=\"clear: both; margin: 0 auto; width: 500px;\">
          <a onclick=\"document.getElementById('output').innerHTML = factorial(document.getElementById('input').value); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Calculate</a>
        </div>
        ";

  $hash_table_implementation = "
        <h1 id=\"def_hash_table\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Hash Table</h1>
        <p>Hash table is a table mapping keys to indices of values in memory, a hash function is used on the keys to generate the indices. Usage of this implementation:</p>
        <ul>
          <li>To add a key-value pair, in the input write your key followed by a hyphen then the value and press add. Forexample \"Amos-900\".</li>
          <li>To remove a key-value pair, in input write the key you want to remove, then press remove.</li>
          <li>To retrieve a value, in input, write the key then press look up and the value will be shown in output.</li>
        </ul>
        <div style=\"width: 80%; margin: 0 auto;\">
          <table style=\"border-collapse: collapse; border: 0; margin:0 auto;\" id=\"hash_table\">
          </table>
        </div>
        <div style=\"width: 400px; margin: 0 auto; clear: both;\">
          <input maxlength=\"10\" type=\"text\" id=\"input\" placeholder=\"Input\" style=\"width: 150px; outline: 0; color: #5cb874; border-radius: 15px; border: 1px solid #5cb874; padding: 5px 10px; float: left;\" />
          <p style=\"display: block; width: 200px; padding: 5px 10px; margin-left: 20px; float: left;\">Output: <i id=\"output\" style=\"color: #5cb874;\">Null</i></p> 
        </div>
        <div style=\"clear: both;\"></div>
        <div style=\"clear: both; margin: 0 auto; width: 500px;\">
          <a onclick=\"hashTable.add(document.getElementById('input').value.split('-')[0], document.getElementById('input').value.split('-')[1]); document.getElementById('output').innerHTML = 'Null'; hashTable.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Add</a>
          <a onclick=\"document.getElementById('output').innerHTML = 'Null'; hashTable.remove(document.getElementById('input').value); document.getElementById('input').value = ''; hashTable.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Remove</a>
          <a onclick=\"document.getElementById('output').innerHTML = hashTable.lookup(document.getElementById('input').value); document.getElementById('input').value = ''; return false;\" style=\"width:120px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Look Up</a>
        </div>
  ";

  $list_implementation = "
        <h1 id=\"def_linked_list\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Linked List</h1>
        <div style=\"width: 80%; margin: 0 auto;\">
          <p>A linked list is a linear collection of data, each item in the collection stores a pointer to the next item (and a pointer to the previous item for a doubly linked list). Usage of implementation:</p>
          <ul>
            <li>Adding to the list is done by writing the data in input and pressing Add.</li>
            <li>To add to a specific position in the list, write \"p,d\" in input, where p is the position and d is the data then press Add At. Forexample 1,Emily.</li>
            <li>Removing an item, write the item you want to remove fro the list in input then press Remove</li>
            <li>RemoveAt removes an item at a particular position, put the position in input then press Remove At.</li>
            <li>To find the index of a particular item, insert the value of the item in input then press Index Of.</li>
            <li>Retrieving data at a particular position, input the position into input then press Element At.</li>
            <li>IsEmpty return whether the list is empty or not.</li>
            <li>Size when pressed, returns the number of items in the list</li>
          </ul>
          <ul id=\"linked_list\">
          </ul>
        </div>
        <div style=\"width: 400px; margin: 0 auto; clear: both;\">
          <input maxlength=\"10\" type=\"text\" id=\"input\" placeholder=\"Input\" style=\"width: 150px; outline: 0; color: #5cb874; border-radius: 15px; border: 1px solid #5cb874; padding: 5px 10px; float: left;\" />
          <p style=\"display: block; width: 200px; padding: 5px 10px; margin-left: 20px; float: left;\">Output: <i id=\"output\" style=\"color: #5cb874;\">Null</i></p> 
        </div>
        <div style=\"clear: both;\"></div>
        <div style=\"clear: both; margin: 0 auto; width: 500px;\">
          <a onclick=\"linkedList.add(document.getElementById('input').value); document.getElementById('output').innerHTML = 'Null'; linkedList.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Add</a>
          <a onclick=\"linkedList.addAt(parseInt(document.getElementById('input').value.split(',')[0]), document.getElementById('input').value.split(',')[1]); document.getElementById('output').innerHTML = 'Null'; linkedList.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Add At</a>
          <a onclick=\"document.getElementById('output').innerHTML = linkedList.remove(document.getElementById('input').value); document.getElementById('input').value = ''; linkedList.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Remove</a>
          <a onclick=\"document.getElementById('output').innerHTML = linkedList.removeAt(parseInt(document.getElementById('input').value)); document.getElementById('input').value = ''; linkedList.print(); return false;\" style=\"width:120px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Remove At</a>
          <a onclick=\"document.getElementById('output').innerHTML = linkedList.indexOf(document.getElementById('input').value); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Index Of</a>
          <a onclick=\"document.getElementById('output').innerHTML = linkedList.elementAt(parseInt(document.getElementById('input').value)); document.getElementById('input').value = ''; return false;\" style=\"width:120px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Element At</a>
          <a onclick=\"document.getElementById('output').innerHTML = linkedList.isEmpty(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">IsEmpty</a>
          <a onclick=\"document.getElementById('output').innerHTML = linkedList.size(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Size</a>
        </div>
  ";

    $queue_implementation = "
        <h1 id=\"def_queue\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Queue</h1>
        <div style=\"width: 80%; margin: 0 auto;\">
          <p>A queue is a data structure that follows the First In First Out Order. Implementation Usage:</p>
          <ul>
            <li>Write into input and press enqueue to add an element to the rear of the queue.</li>
            <li>Output and delete the element at the front of the queue by pressing dequeue.</li>
            <li>Output the element at the front of the queue without removing it by pressing front.</li>
            <li>Return whether the queue is empty or not by pressing IsEmpty.</li>
            <li>Return whether the queue is full or not by pressing IsFull.</li>
            <li>Return the number of elements on the stack by pressing size.</li>
          </ul>
          <ul id=\"queue\">
          </ul>
        </div>
        <div style=\"width: 400px; margin: 0 auto; clear: both;\">
          <input maxlength=\"10\" type=\"text\" id=\"input\" placeholder=\"Input\" style=\"width: 150px; outline: 0; color: #5cb874; border-radius: 15px; border: 1px solid #5cb874; padding: 5px 10px; float: left;\" />
          <p style=\"display: block; width: 200px; padding: 5px 10px; margin-left: 20px; float: left;\">Output: <i id=\"output\" style=\"color: #5cb874;\">Null</i></p> 
        </div>
        <div style=\"clear: both;\"></div>
        <div style=\"clear: both; margin: 0 auto; width: 500px;\">
          <a onclick=\"document.getElementById('output').innerHTML = queue.enqueue(document.getElementById('input').value); queue.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Enqueue</a>
          <a onclick=\"document.getElementById('output').innerHTML = queue.dequeue(); document.getElementById('input').value = ''; queue.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Dequeue</a>
          <a onclick=\"document.getElementById('output').innerHTML = queue.front(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Front</a>
          <a onclick=\"document.getElementById('output').innerHTML = queue.isEmpty(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">IsEmpty</a>
          <a onclick=\"document.getElementById('output').innerHTML = queue.isFull(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">IsFull</a>
          <a onclick=\"document.getElementById('output').innerHTML = queue.size(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Size</a>
        </div>
    ";

    $circular_queue_implementation = "
        <h1 id=\"def_circular_queue\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Circular Queue</h1>
        <div style=\"width: 80%; margin: 0 auto;\">
          <p>A circular queue is like a normal queue but the rear points to the front. Implementation Usage:</p>
          <ul>
            <li>Write into input and press enqueue to add an element to the rear of the queue.</li>
            <li>Output and delete the element at the front of the queue by pressing dequeue.</li>
            <li>Output the element at the front of the queue without removing it by pressing front.</li>
            <li>Return whether the queue is empty or not by pressing IsEmpty.</li>
            <li>Return whether the queue is full or not by pressing IsFull.</li>
            <li>Return the number of elements on the stack by pressing size.</li>
          </ul>
          <ul id=\"circular_queue\">
          </ul>
        </div>
        <div style=\"width: 400px; margin: 0 auto; clear: both;\">
          <input maxlength=\"10\" type=\"text\" id=\"input\" placeholder=\"Input\" style=\"width: 150px; outline: 0; color: #5cb874; border-radius: 15px; border: 1px solid #5cb874; padding: 5px 10px; float: left;\" />
          <p style=\"display: block; width: 200px; padding: 5px 10px; margin-left: 20px; float: left;\">Output: <i id=\"output\" style=\"color: #5cb874;\">Null</i></p> 
        </div>
        <div style=\"clear: both;\"></div>
        <div style=\"clear: both; margin: 0 auto; width: 500px;\">
          <a onclick=\"document.getElementById('output').innerHTML = circularQueue.enqueue(document.getElementById('input').value); circularQueue.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Enqueue</a>
          <a onclick=\"document.getElementById('output').innerHTML = circularQueue.dequeue(); document.getElementById('input').value = ''; circularQueue.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Dequeue</a>
          <a onclick=\"document.getElementById('output').innerHTML = circularQueue.front(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Front</a>
          <a onclick=\"document.getElementById('output').innerHTML = circularQueue.isEmpty(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">IsEmpty</a>
          <a onclick=\"document.getElementById('output').innerHTML = circularQueue.isFull(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">IsFull</a>
          <a onclick=\"document.getElementById('output').innerHTML = circularQueue.size(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Size</a>
        </div>
    ";

  $stack_implementation = "
        <h1 id=\"def_stack\" style=\"color: white; padding: 10px 20px; background-color: #5cb874;\">Stack</h1>
        <div style=\"width: 80%; margin: 0 auto;\">
          <p>Stack is a data structure that follows the Last In Last Out Order. Implementation Usage:</p>
          <ul>
            <li>Write into input and press push to add an element onto the stack.</li>
            <li>Output and delete the top most element on stack by pressing pop.</li>
            <li>Output the top most element on stack without removing it by pressing peek.</li>
            <li>Return the number of elements on the stack by pressing size.</li>
          </ul>
          <ul id=\"stack\"style=\"color: #5cb874;\">
          </ul>
        </div>
        <div style=\"width: 400px; margin: 0 auto;\">
          <input maxlength=\"10\" type=\"text\" id=\"input\" placeholder=\"Input\" style=\"width: 150px; outline: 0; color: #5cb874; border-radius: 15px; border: 1px solid #5cb874; padding: 5px 10px; float: left;\" />
          <p style=\"display: block; width: 200px; padding: 5px 10px; margin-left: 20px; float: left;\">Output: <i id=\"output\" style=\"color: #5cb874;\">Null</i></p> 
        </div>
        <div style=\"clear: both;\"></div>
        <div style=\"clear: both; margin: 0 auto; width: 500px;\">
          <a onclick=\"stack.push(document.getElementById('input').value); document.getElementById('output').innerHTML = 'Null'; stack.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Push</a>
          <a onclick=\"document.getElementById('output').innerHTML = stack.pop(); document.getElementById('input').value = ''; stack.print(); return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Pop</a>
          <a onclick=\"document.getElementById('output').innerHTML = stack.peek(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Peek</a>
          <a onclick=\"document.getElementById('output').innerHTML = stack.size(); document.getElementById('input').value = ''; return false;\" style=\"width:100px; cursor: default; float: left; margin: 5px 10px; padding: 3px; text-align: center; border-radius: 10px; background-color: #5cb874; border: 0; color: white;\">Length</a>
        </div>
        ";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Group 10 Data Structures And Algoritms</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

  <style type="text/css">
    
  </style>
  
</head>
<body>
  <?php
    $topic_text = "Introduction";
    switch ($topic) {
      case 's':
        if($number < 0)
          $number = 0;
        if($number >= count($stack_videos))
          $number = count($stack_videos) - 1;
        $topic_text = "Stack";
        break;
      case 't':
        if($number < 0)
          $number = 0;
        if($number >= count($trees_videos))
          $number = count($trees_videos) - 1;
        $topic_text = "Trees";
        break;
      case 'q':
        if($number < 0)
          $number = 0;
        if($number >= count($queues_videos))
          $number = count($queues_videos) - 1;
        $topic_text = "Queues";
        break;
      case 'l':
        if($number < 0)
          $number = 0;
        if($number >= count($linked_list_videos))
          $number = count($linked_list_videos) - 1;
        $topic_text = "Lists";
        break;
      case 'g':
        if($number < 0)
          $number = 0;
        if($number >= count($graphs_videos))
          $number = count($graphs_videos) - 1;
        $topic_text = "Graphs";
        break;
      case 'se':
        $number = 0;
        $topic_text = "Searching";
        break;
      case 'so':
        $number = 0;
        $topic_text = "Sorting";
        break;
      case 'h':
        $number = 0;
        $topic_text = "Sorting";
        break;
      default:
        if($number < 0)
          $number = 0;
        if($number >= count($introduction))
          $number = count($introduction) - 1;
        $topic_text = "Topics";
        break;
    }
  ?>
  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.html">DATA STRUCTURES AND ALGORITHMS</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#topics"><?php echo $topic_text ?></a></li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Notes</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="index.php?ty=n&t=st">Stacks</a></li>
                <li><a href="index.php?ty=n&t=q">Queues</a></li>
                <li><a href="index.php?ty=n&t=l">Lists</a></li>
                <li><a href="index.php?ty=n&t=so">Sorting</a></li>
                <li><a href="index.php?ty=n&t=se">Searching</a></li>
                <li><a href="index.php?ty=n&t=t">Trees</a></li>
                <li><a href="index.php?ty=n&t=g">Graphs</a></li>
                <li><a href="index.php?ty=n&t=h">Hashing</a></li>
              </ul>
              </li>
              <li class="dropdown"><a href="#video.php"><span>Videos</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="index.php?ty=v&t=i">Introduction</a></li>
                  <li><a href="index.php?ty=v&t=st">Stacks</a></li>
                  <li><a href="index.php?ty=v&t=q">Queues</a></li>
                  <li><a href="index.php?ty=v&t=l">Lists</a></li>
                  <li><a href="index.php?ty=v&t=t">Trees</a></li>
                  <li><a href="index.php?ty=v&t=g">Graphs</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#video.php"><span>Implementation</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="index.php?ty=i&t=fi">Fibonacci</a></li>
                  <li><a href="index.php?ty=i&t=fa">Factorial</a></li>
                  <li><a href="index.php?ty=i&t=tow">Tower of Hanoi</a></li>
                  <li><a href="index.php?ty=i&t=st">Stacks</a></li>
                  <li><a href="index.php?ty=i&t=q">Queue</a></li>
                  <li><a href="index.php?ty=i&t=cq">Circular Queue</a></li>
                  <li><a href="index.php?ty=i&t=l">Linked Lists</a></li>
                  <li><a href="index.php?ty=i&t=h">Hash Table</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Data Structures And Algorithms</span></h2>
              <p class="animate__animated animate__fadeInUp">Data structures deals with the study of methods, techniques and tools to organize or structure data.</p>
              <p>An Algorithm may be loosely defined as a process or procedure or method or recipe. It is a specific set of rules to obtain a definite output from specific inputs provided to the problem.</p>
            </div>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <p class="animate__animated animate__fadeInUp">Welcome to <span>Data Structures And Algorithms compiled and presented by Group 10 of the Data Structures and Algorithms class, academic year 2020/2021</span></p>
              <table id="group_table" cellspacing="0">
              	<tr>
              		<th style="color:white; text-align: left;">Name</th>
              		<th style="color:white; text-align: left;">Reg No.</th>
              	</tr>
                <tr>
              		<td>Awath Javar Abdat</td>
              		<td>19/U/0582</td>
              	</tr>
                <tr>
              		<td>Namuganga Emmilly Immaculate</td>
              		<td>19/U/0126</td>
              	</tr>
                <tr>
              		<td>Kirabira Mwesigwa Marvin</td>
              		<td>19/U/16662/EVE</td>
              	</tr>
                <tr>
                  <td>Nalwanga Patricia</td>
                  <td>19/U/17304/EVE</td>
                </tr>
                <tr>
                  <td>Natumanya Naboth</td>
                  <td>19/U/17625/EVE</td>
                </tr>
              	
              	
              	
              </table>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>
      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= Why Us Section ======= -->
    <section id="topics" class="why-us">
      <div class="container">
        <div class="row no-gutters">
          <?php
            switch($topic)
            {
              case 'l':
              {
                if($type == "n")
                {
                  echo $lists_notes_display;
                }else if($type == "v"){
                  echo "<h1 style=\"color: #5cb874;\" id=\"video_title\"><i>".($number+1).". ".$linked_list_videos[$number]['title']."</i></h1>
                        <iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" height=\"400px\" src=\"".$linked_list_videos[$number]['link']."\"> </iframe>";
                }else{
                  echo $list_implementation;
                }
              }
              break;
              case 'q':
              {
                if($type == "n")
                {
                  echo $queue_notes_display;
                }else if($type == "v"){
                  echo "<h1 style=\"color: #5cb874;\" id=\"video_title\"><i>".($number+1).". ".$queues_videos[$number]['title']."</i></h1>
                        <iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" height=\"400px\" src=\"".$queues_videos[$number]['link']."\"> </iframe>";
                }else{
                  echo $queue_implementation;
                }
              }
              break;
              case 'so':
              {
                if($type == "n")
                {
                  echo $sorting_notes_display;
                }
              }
              break;
              case 'se':
              {
                if($type == "n")
                {
                  echo $searching_notes_display;
                }
              }
              break;
              case 'st':
              {
                if($type == "n")
                {
                  echo $stack_notes_display;
                }else if($type == "v"){
                  echo "<h1 style=\"color: #5cb874;\" id=\"video_title\"><i>".($number+1).". ".$stack_videos[$number]['title']."</i></h1>
                        <iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" height=\"400px\" src=\"".$stack_videos[$number]['link']."\"> </iframe>";
                }else{
                  echo $stack_implementation;
                }
              }
              break;
              case 'g':
              {
                if($type == "n")
                {
                  echo $graphs_notes_display;
                }else if($type == "v"){
                  echo "<h1 style=\"color: #5cb874;\" id=\"video_title\"><i>".($number+1).". ".$graphs_videos[$number]['title']."</i></h1>
                        <iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" height=\"400px\" src=\"".$graphs_videos[$number]['link']."\"> </iframe>";
                }
              }
              break;
              case 't':
              {
                if($type == "n")
                {
                  echo $trees_notes_display;
                }else if($type == "v"){
                  echo "<h1 style=\"color: #5cb874;\" id=\"video_title\"><i>".($number+1).". ".$trees_videos[$number]['title']."</i></h1>
                        <iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" height=\"400px\" src=\"".$trees_videos[$number]['link']."\"> </iframe>";
                }
              }
              break;
              case 'h':
              {
                if($type == "n")
                {
                  echo $hashing_notes_display;
                }else if($type == "i"){
                  echo $hash_table_implementation;
                }
              }
              break;
              case 'cq':
              {
                echo $circular_queue_implementation;
              }
              break;
              case 'fa':
              {
                echo $factorial_implementation;
              }
              break;
              case 'fi':
              {
                echo $fibonacci_implementation;
              }
              break;
              case 'tow':
              {
                echo $tower_of_hanoi_implementation;
              }
              break;
              default:
              {
                if($type == "n")
                {
                  echo $default_notes_display;
                }else if($type == "v"){
                  echo "<h1 style=\"color: #5cb874;\" id=\"video_title\"><i>".($number+1).". ".$introduction[$number]['title']."</i></h1>
                        <iframe allowfullscreen=\"allowfullscreen\" mozallowfullscreen=\"mozallowfullscreen\" msallowfullscreen=\"msallowfullscreen\" oallowfullscreen=\"oallowfullscreen\" webkitallowfullscreen=\"webkitallowfullscreen\" width=\"100%\" height=\"400px\" src=\"".$introduction[$number]['link']."\"> </iframe>";
                }
              }
              break;
            }
            if($type == "v")
            {
              echo "
          <ul id=\"video_buttons\">
            <li><a href=\"index.php?ty=v&t=".$topic."&n=".($number-1)."#topics\">Previous</a></li>
            <li><a href=\"index.php?ty=v&t=".$topic."&n=".($number+1)."#topics\">Next</a></li>
          </ul>";
            }
          ?>
        </div>
      </div>
    </section><!-- End Why Us Section -->
    <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#topics"><?php echo $topic_text ?></a></li>
          <li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li class="dropdown"><a href="#"><span>Notes</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="index.php?ty=n&t=st">Stacks</a></li>
                <li><a href="index.php?ty=n&t=q">Queues</a></li>
                <li><a href="index.php?ty=n&t=l">Lists</a></li>
                <li><a href="index.php?ty=n&t=so">Sorting</a></li>
                <li><a href="index.php?ty=n&t=se">Searching</a></li>
                <li><a href="index.php?ty=n&t=t">Trees</a></li>
                <li><a href="index.php?ty=n&t=g">Graphs</a></li>
                <li><a href="index.php?ty=n&t=h">Hashing</a></li>
              </ul>
              </li>
              <li class="dropdown"><a href="#video.php"><span>Videos</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="index.php?ty=v&t=i">Introduction</a></li>
                  <li><a href="index.php?ty=v&t=st">Stacks</a></li>
                  <li><a href="index.php?ty=v&t=q">Queues</a></li>
                  <li><a href="index.php?ty=v&t=l">Lists</a></li>
                  <li><a href="index.php?ty=v&t=t">Trees</a></li>
                  <li><a href="index.php?ty=v&t=g">Graphs</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#video.php"><span>Implementation</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="index.php?ty=i&t=fi">Fibonacci</a></li>
                  <li><a href="index.php?ty=i&t=fa">Factorial</a></li>
                  <li><a href="index.php?ty=i&t=tow">Tower of Hanoi</a></li>
                  <li><a href="index.php?ty=i&t=st">Stacks</a></li>
                  <li><a href="index.php?ty=i&t=q">Queue</a></li>
                  <li><a href="index.php?ty=i&t=cq">Circular Queue</a></li>
                  <li><a href="index.php?ty=i&t=l">Linked Lists</a></li>
                  <li><a href="index.php?ty=i&t=h">Hash Table</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  </main><!-- End #main -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script type="text/javascript" language="javascript">
    function Stack() {
      this.count = 0;
      this.storage = {};
      this.push = function (value) {
        if(value != '')
        {
          this.storage[this.count] = value;
          this.count++;
        }
      }
      this.pop = function () {
        if (this.count === 0) {
          return "Null";
        }
        this.count--;
        var result = this.storage[this.count];
        delete this.storage[this.count];
        return result;
      }
      this.peek = function () {
        return (this.count === 0 ? "Null" : this.storage[this.count - 1]);
      }
      this.size = function () {
        return this.count;
      }
      this.print = function () {
        if(document.getElementById("stack") != null && document.getElementById("stack") != undefined && this.count >= 0)
        {
          document.getElementById("stack").innerHTML = "";
          for(i = (this.count-1); i >= 0; i--)
          {
            document.getElementById("stack").innerHTML += "<li style=\"width:100px; margin: 5px auto; display: block; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ this.storage[i] +"</li>";
          }
        }
      }
    }
    var stack = new Stack();

    function Queue() {
      var collection = [];
      var max_count = 5;
      var count = 0;
      this.print = function () {
        if(document.getElementById("queue") != null && document.getElementById("queue") != undefined && collection.length >= 0)
        {
          document.getElementById("queue").innerHTML = "";
          for(i = 0; i < (collection.length); i++)
          {
            document.getElementById("queue").innerHTML += "<li style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ collection[i] +"</li>";
          }
        }
      }
      this.enqueue = function (element) {
        if(collection.length >= max_count || (max_count - count <= 0))
        {
          return "Invalid";
        }
        if(element != '')
        {
          count++;
          collection.push(element);
          return "Success";
        }else{
          return "Invalid";
        }
      }
      this.dequeue = function () {
        return (collection.length > 0 ? collection.shift() : "Null");
      }
      this.front = function () {
        return (collection.length > 0 ? collection[0] : "Null");
      }
      this.isEmpty = function () {
        return collection.length === 0;
      }
      this.isFull = function () {
        return (collection.length === max_count);
      }
      this.size = function () {
        return collection.length;
      }
    }
    var queue = new Queue();

    function CircularQueue() {
      var collection = [];
      var max_count = 5;
      this.print = function () {
        if(document.getElementById("circular_queue") != null && document.getElementById("circular_queue") != undefined && collection.length >= 0)
        {
          document.getElementById("circular_queue").innerHTML = "";
          for(i = 0; i < (collection.length); i++)
          {
            document.getElementById("circular_queue").innerHTML += "<li style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ collection[i] +"</li>";
          }
        }
      }
      this.enqueue = function (element) {
        if(collection.length >= max_count)
          return "Invalid";
        if(element != '')
          collection.push(element);
        return "Success";
      }
      this.dequeue = function () {
        return (collection.length > 0 ? collection.shift() : "Null");
      }
      this.front = function () {
        return (collection.length > 0 ? collection[0] : "Null");
      }
      this.isEmpty = function () {
        return collection.length === 0;
      }
      this.isFull = function () {
        return collection.length === max_count;
      }
      this.size = function () {
        return collection.length;
      }
    }
    var circularQueue = new CircularQueue();

    function PriorityQueue() {
      var collection = [];
      this.print = function () {
        if(document.getElementById("priority_queue") != null && document.getElementById("priority_queue") != undefined && collection.length >= 0)
        {
          document.getElementById("priority_queue").innerHTML = "";
          for(i = 0; i < (collection.length); i++)
          {
            document.getElementById("priority_queue").innerHTML += "<li style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ collection[i][0] +"</li>";
          }
        }
      }
      this.enqueue = function (element) {
        if(element != '')
        {
          console.log(collection);
          var actual_element = element.split(',')[0];
          var priority = parseInt(element.split(',')[1]);
          if(collection.length === 0)
          {
            collection.push([actual_element, priority]);
          }else{
            var added = false;
            for (var i = 0; i < collection.length; i++) {
              if (priority < collection[i][1]) {
                collection.splice(i, 0, [actual_element, priority]);
                added = true;
                break;
              }
            }
            if(!added)
            {
              collection.push([actual_element, priority]);
            }
          }
        }
      }
      this.dequeue = function () {
        return (collection.length > 0 ? collection.shift()[0] : "Null");
      }
      this.front = function () {
        return (collection.length > 0 ? collection[0][0] : "Null");
      }
      this.isEmpty = function () {
        return collection.length === 0;
      }
      this.size = function () {
        return collection.length;
      }
    }
    var priorityQueue = new PriorityQueue();

    /** Node in the linked list **/
    function Node(element) {
      // Data in the node
      this.element = element;
      // Pointer to the next node
      this.next = null;
    }

    function LinkedList() {
      var length = 0;
      var head = null;
      this.print = function () {
        var currentNode = head;
        if(document.getElementById("linked_list") != null && document.getElementById("linked_list") != undefined && length >= 0)
        {
          document.getElementById("linked_list").innerHTML = "";
          while(currentNode)
          {
            document.getElementById("linked_list").innerHTML += "<li style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ currentNode.element +"</li>";
            currentNode = currentNode.next;
          }
        }
      }
      this.size = function () {
        return length;
      }
      this.head = function () {
        return head;
      }
      this.add = function (element) {
        var node = new Node(element);
        if (head == null) {
          head = node;
        } else {
          var currentNode = head;
          while (currentNode.next) {
            currentNode = currentNode.next;
          }
          currentNode.next = node;
        }
        length++;
      }
      this.remove = function (element) {
        var currentNode = head;
        var previousNode;
        if (currentNode.element === element) {
          head = currentNode.next;
        } else {
          while (currentNode.element !== element) {
            previousNode = currentNode;
            currentNode = currentNode.next;
          }
          previousNode.next = currentNode.next;
        }
        length--;
      }
      this.isEmpty = function () {
        return length === 0;
      }
      this.indexOf = function (element) {
        var currentNode = head;
        var index = -1;
        while (currentNode) {
          index++;
          if (currentNode.element === element) {
            return index;
          }
          currentNode = currentNode.next;
        }
        return -1;
      }
      this.elementAt = function (index) {
        var currentNode = head;
        var count = 0;
        while (count < index) {
          count++;
          currentNode = currentNode.next;
        }
        return currentNode.element;
      }
      this.addAt = function (index, element) {
        var node = new Node(element);
        var currentNode = head;
        var previousNode;
        var currentIndex = 0;
        if (index > length) {
          return false;
        }
        if (index === 0) {
          node.next = currentNode;
          head = node;
        } else {
          while (currentIndex < index) {
            currentIndex++;
            previousNode = currentNode;
            currentNode = currentNode.next;
          }
          node.next = currentNode;
          previousNode.next = node;
        }
        length++;
      }
      this.removeAt = function (index) {
        var currentNode = head;
        var previousNode;
        var currentIndex = 0;
        if (index < 0 || index >= length) {
          return null;
        }
        if (index === 0) {
          head = currentIndex.next;
        } else {
        while (currentIndex < index) {
          currentIndex++;
          previousNode = currentNode;
          currentNode = currentNode.next;
        }
        previousNode.next = currentNode.next;
      }
      length--;
      return currentNode.element;
    }
  }
  var linkedList = new LinkedList();

  function hash(string, max) {
    var hash = 0;
    for (var i = 0; i < string.length; i++) {
      hash += string.charCodeAt(i);
    }
    return hash % max;
  }
  function HashTable() {
    let storage = [];
    const storageLimit = 4;
    this.print =  function () {
      document.getElementById("hash_table").innerHTML = "<tr><td style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">Key</td> <td style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">Index</td> <td style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">Value</td></tr>";
      storage.forEach(function (item_parent, index){
        for(i = 0; i < item_parent.length; i++)
        {
          item = item_parent[i];
          document.getElementById("hash_table").innerHTML += "<tr><td style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ item[0] +"</td> <td style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ index +"</td> <td style=\"width:100px; margin: 10px 10px; display: block; float: left; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ item[1] +"</td></tr>";
        }
      });
    }
    this.add = function (key, value) {
      var index = hash(key, storageLimit);
      if (storage[index] === undefined) {
        storage[index] = [[key, value]];
      } else {
        var inserted = false;
        for (var i = 0; i < storage[index].length; i++) {
          if (storage[index][i][0] === key) {
            storage[index][i][1] = value;
            inserted = true;
          }
        }
        if (inserted === false) {
          storage[index].push([key, value]);
        }
      }
    }
    this.remove = function (key) {
      var index = hash(key, storageLimit);
      if (storage[index].length === 1 && storage[index][0][0] === key) {
        delete storage[index];
      } else {
        for (var i = 0; i < storage[index].length; i++) {
          if (storage[index][i][0] === key) {
            delete (storage[index][i]);
          }
        }
      }
    }
    this.lookup = function (key) {
      var index = hash(key, storageLimit);
      if (storage[index] === undefined) {
        return undefined;
      } else {
        for (var i = 0; i < storage[index].length; i++) {
          if (storage[index][i][0] === key) {
            return storage[index][i][1];
          }
        }
      }
    }
  }
  var hashTable = new HashTable();

  function factorial(a)
  {
    var result = 1;
    if(a === "")
    {
      return "Null";      
    }else if(a === '0' || parseFloat(a) === 0){
      return 1;
    }else if(parseFloat(a) - parseInt(a) != 0)
    {
      return "Null";
    }else{
      for(i = 1; i <= parseInt(a); i++)
      {
        result *= i;
      }
      return result;
    }
  }

  function fibonacci(a)
  {
    var result = 0;
    if(a === "")
    {
      return "Null";      
    }else if(a === '0' || parseFloat(a) <= 0){
      return 0;
    }else if(parseFloat(a) - parseInt(a) != 0){
      return "Null";
    }else if(parseInt(a) == 1){
      return 1;
    }else{
      num1 = 0;
      num2 = 1;
      for(i = 1; i < a; i++)
      {
        result = num1 + num2;
        num1 = num2;
        num2 = result;
      }
      return result;
    }
  }

  function TowerOfHanoi()
  {
    var letters = ["A", "B", "C", "D", "E"];
    var numBlocks = 3;
    var stacks = [new Stack(), new Stack(), new Stack()];
    stacks[0].push("A");
    stacks[0].push("B");
    stacks[0].push("C");
    this.print = function () {
      if(document.getElementById("stack1") != null && document.getElementById("stack1") != undefined && stacks[0].count >= 0)
      {
        document.getElementById("stack1").innerHTML = "";
        for(i = (stacks[0].count-1); i >= 0; i--)
        {
          document.getElementById("stack1").innerHTML += "<li style=\"width:" + (150 + (stacks[0].storage[i].charCodeAt(0)-"A".charCodeAt(0))*(-20)) + "px; margin: 5px auto; display: block; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ stacks[0].storage[i] +"</li>";
        }
      }
      if(document.getElementById("stack2") != null && document.getElementById("stack2") != undefined && stacks[1].count >= 0)
      {
        document.getElementById("stack2").innerHTML = "";
        for(i = (stacks[1].count-1); i >= 0; i--)
        {
          document.getElementById("stack2").innerHTML += "<li style=\"width:" + (150 + (stacks[1].storage[i].charCodeAt(0)-"A".charCodeAt(0))*(-20)) + "px; margin: 5px auto; display: block; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ stacks[1].storage[i] +"</li>";
        }
      }
      if(document.getElementById("stack3") != null && document.getElementById("stack3") != undefined && stacks[2].count >= 0)
      {
        document.getElementById("stack3").innerHTML = "";
        for(i = (stacks[2].count-1); i >= 0; i--)
        {
          document.getElementById("stack3").innerHTML += "<li style=\"width:" + (150 + (stacks[2].storage[i].charCodeAt(0)-"A".charCodeAt(0))*(-20)) + "px; margin: 5px auto; display: block; padding: 3px; text-align: center; border-radius: 10px; border: 1px solid #5cb874; background-color: white; color: #5cb874; list-style-type: none;\">"+ stacks[2].storage[i] +"</li>";
        }
      }
    }
    this.move = function(source, destination)
    {
      if(stacks[source] === undefined || stacks[destination] === undefined)
      {
        return "Invalid";
      }else if(stacks[source].count === 0){
        return "Invalid";
      }else if(stacks[destination].count > 0 && stacks[source].peek().charCodeAt(0) < stacks[destination].peek().charCodeAt(0)){
        return "Invalid";
      }else{
        stacks[destination].push(stacks[source].pop());
        return "Continue";
      }
    }
    this.reset = function(count)
    {
      if(count > 5 || count < 3)
      {
        return "Invalid";
      }
      numBlocks = count;
      stacks[0] = new Stack();
      for(i = 0; i < count; i++)
      {
        stacks[0].push(letters[i]);
      }
      stacks[1] = new Stack();
      stacks[2] = new Stack();
    }
    this.check = function()
    {
      if(stacks[2].count === numBlocks)
        return "Complete";
      else
        return "Incomplete";
    }
  }
  var tower_of_hanoi = new TowerOfHanoi();
  tower_of_hanoi.reset(3);
  tower_of_hanoi.print();
  </script>
</body>
</html>
