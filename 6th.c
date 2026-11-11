#include<stdio.h>
void main() {
    int a[100], i,j,n,pos,element;
    printf("Enter the size of the array\n");
    scanf("%d",&n);
    printf("Enter the elements of the array\n");
    for(i=0;i<n;i++)
        scanf("%d",&a[i]);
    printf("The elements of the array are\n");
    for(i=0;i<n;i++)
        printf("%d\n",a[i]);
    printf("\nEnter the position and element to be inserted\n");  
    scanf("%d%d",&pos,&element);
    if(pos>n)
        printf("Insertion not possible");
    else { 
    for(i=n;i>=pos;i--)
        a[i+1]=a[i];
    a[pos]=element;
    printf("\nThe elements of the array after insertion are\n");
    for(i=0;i<=n;i++)
        printf("%d\n",a[i]);
    }
    printf("\nEnter the position to be deleted\n");
    scanf("%d",&pos);
    if(pos>n)
        printf("Deletion not possible");
    else {
        a[pos]=a[pos+1];
        for(i=pos+1;i<=n;i++)
            a[i]=a[i+1];
        printf("\nThe elements of the array after deletion are\n");
        for(i=0;i<n;i++)
            printf("%d\n",a[i]);
    }
    printf("\nEnter the element to be searched\n");
    scanf("%d",&element);
    for(i=0;i<n;i++) {
        if(a[i]==element)
            printf("\nElement found at position %d",i);
        else
            printf("\nElement not found");
    }
    printf("\nEnter the position and element to be updated\n");
    scanf("%d %d",&pos,&element);
    if(pos>n)
        printf("Update not possible");
    else {
        a[pos]=element;
        printf("\nThe elements of the array after update are\n");
        for(i=0;i<n;i++)
            printf("%d\n",a[i]);
    }
}

