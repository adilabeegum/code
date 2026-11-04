
#include <stdio.h>

// Function to maintain Min Heap property
void minHeapify(int arr[], int n, int i)
{
    int smallest = i;
    int left = 2 * i + 1;
    int right = 2 * i + 2;

    if (left < n && arr[left] < arr[smallest])
        smallest = left;

    if (right < n && arr[right] < arr[smallest])
        smallest = right;

    if (smallest != i)
    {
        int temp = arr[i];
        arr[i] = arr[smallest];
        arr[smallest] = temp;

        minHeapify(arr, n, smallest);
    }
}

// Function to construct Min Heap
void buildMinHeap(int arr[], int n)
{
    for (int i = n / 2 - 1; i >= 0; i--)
    {
        minHeapify(arr, n, i);
    }
}

// Function to print array
void printArray(int arr[], int n)
{
    for (int i = 0; i < n; ++i)
        printf("%d ", arr[i]);

    printf("\n");
}

// Main function
int main()
{
    // Test with a random array
    int randomArray[] = {4, 10, 3, 5, 1};
    int n1 = sizeof(randomArray) / sizeof(randomArray[0]);

    printf("Original Random Array: ");
    printArray(randomArray, n1);

    buildMinHeap(randomArray, n1);

    printf("Min Heap from Random Array: ");
    printArray(randomArray, n1);

    printf("\n");

    // Test with a sorted array
    int sortedArray[] = {8, 7, 5, 4, 2};
    int n2 = sizeof(sortedArray) / sizeof(sortedArray[0]);

    printf("Original Sorted Array: ");
    printArray(sortedArray, n2);

    buildMinHeap(sortedArray, n2);

    printf("Min Heap from Sorted Array: ");
    printArray(sortedArray, n2);

    return 0;
}
