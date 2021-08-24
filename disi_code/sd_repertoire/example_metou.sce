
for k=100:110 do
P=[(((5^k)/factorial(k))*(exp-5)),0,((1-((5^k)/factorial(k))*(exp-5))/2),((1-((5^k)/factorial(k))*(exp-5))/2),0;
((1-((1^k)/factorial(k))*(exp-1))/2),(((1^k)/factorial(k))*(exp-1)),0,0,((1-((1^k)/factorial(k))*(exp-1))/2);
((1-((30^k)/factorial(k))*(exp-30))/2),((1-((30^k)/factorial(k))*(exp-30))/2),(((30^k)/factorial(k))*(exp-30)),0,0;
((1-((11^k)/factorial(k))*(exp-11))/2),0,0,(((11^k)/factorial(k))(*exp-11)),((1-((11^k)/factorial(k))*(exp-11))/2);
((1-((1^k)/factorial(k))*(exp-1))/2),0,0,0,(((1^k)/factorial(k))*(exp-1))]
end
function [Pi]=Calcul_invariant(P);
    nb=input("donner le nombre d''itération")
    [li,col]=size(p)
    Pi0=rand(1,li);
    somme=sum(Pi0);
    Pi0=Pi0/somme;
    x=Pi0;
    tmp=[]
    while(tmp<>x)do
        for 1=1:nb
            X=X*P
            tmp=X
        end
        if(tmp==X)then
            [Pi]=tmp
        else
            nb=nb*2;
        end
    end
endfunction

