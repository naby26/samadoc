//P=[1/4 0 3/4 ;1/4 1/4 1/2 ; 1/4 1/2 1/4]
for k=100:110 do
P=[(((5^k)/factorial(k))*(exp-5)),0,((1-((5^k)/factorial(k))*(exp-5))/2),((1-((5^k)/factorial(k))*(exp-5))/2),0;
((1-((1^k)/factorial(k))*(exp-1))/2),(((1^k)/factorial(k))*(exp-1)),0,0,((1-((1^k)/factorial(k))*(exp-1))/2);
((1-((30^k)/factorial(k))*(exp-30))/2),((1-((30^k)/factorial(k))*(exp-30))/2),(((30^k)/factorial(k))*(exp-30)),0,0;
((1-((11^k)/factorial(k))*(exp-11))/2),0,0,(((11^k)/factorial(k))(*exp-11)),((1-((11^k)/factorial(k))*(exp-11))/2);
((1-((1^k)/factorial(k))*(exp-1))/2),0,0,0,(((1^k)/factorial(k))*(exp-1))]
end
function [Pi]=calcul_invariant(P)
    [li,col]=size(P)
    Pi+rand(1,li)
    Pi=Pi/sum(Pi)
    X=Pi
    c=[]
    while c<>X do
        c=X
        X=X*P
    end
    [Pi]=X
endfunction
