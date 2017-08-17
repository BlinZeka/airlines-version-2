<h1>Admin page</h1>
<div class="container slider" >

    <a class="arrow prev" ng-click="nextSlide()"><img src="../frontend/views/img/paddle_prev_999.png" style="width: 100%; height:60px;"></a>


    <img ng-repeat="slide in slides" class="slide slide-animation nonDraggableImage"
         ng-swipe-right="nextSlide()" ng-swipe-left="prevSlide()"
         ng-hide="!isCurrentSlideIndex($index)" ng-src="{{slide.image}}">

    
    <a class="arrow next" ng-click="prevSlide()"><img src="../frontend/views/img/paddle_next_999.png" style="width: 100%; height:60px;"></a>
    <nav class="nav modifiedNav">
        <div class="wrapper">
            <ul class="dots">
                <li class="dot" ng-repeat="slide in slides">
                    <a ng-class="{'active':isCurrentSlideIndex($index)}" ng-click="setCurrentSlideIndex($index);">{{slide.description}}</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="article">
<article class="article1">
    
    <h3>Task</h3>
    	<p>It’s tempting. You want to sit down with your favored project tracking tool and begin entering project tasks and the dependencies between them. But control yourself! Before you can enter data, you have to be reasonably certain that your task definitions have the appropriate granularity. If you don’t, you’ll find a whole new world of Ways To Screw Up.
		Formally, the process of dividing work into smaller elements is called a Work Breakdown Structure, and there is a particular skill in breaking down project tasks into these right-sized chunks. That skill does not necessarily come naturally. That is, you probably know instinctively that “Build the customer database” or “implement social media” is too big a task to enter into your tracking system; it has to be broken into smaller components that you can identify, assign people to, and track progress on.
		At the other extreme, “Paint wall 1; paint wall 2; paint wall 3” is too much detail. In that scenario, a project manager (whether or not she has that title) spends more time updating the tracking system than doing the work. The task completion list doesn’t give a sense of what the team (of 1 or 100) actually accomplished, either.
		Let me reassure you: This process of identifying project tasks is something we all get better at with time and experience. But even the most novice of project managers (and team members!) wants to do a good job, so herein I provide guidelines at improving your skill.
		To keep this discussion under control, I don’t go into the skill (or art) of predicting how long a task will take. Nor am I aiming to help you decide how many people to put on the project. For that, the ideal answer is always five. Fewer than that and everybody has to do everything.
		</p>  
</article>
</article>
		<article class="article3">
	<h3>Define project tasks in one or two sentences</h3>
		<p>
		That doesn’t mean that a short task definition is ideal (“create the database” is short after all), but that the longer your description, the more likely the task should be broken into smaller pieces.
		Describe a task in a sentence or two. Don’t try to make it the same thing as the specification; you’re defining here, not designing. As you start, especially, write this task to be flexible. As you get underway with the project, you may discover an internal structure that implies decomposition into several subtasks.
		</p>
</article>


<article class="article2">
    
    <h3>Task</h3>
    	<p>It’s tempting. You want to sit down with your favored project tracking tool and begin entering project tasks and the dependencies between them. But control yourself! Before you can enter data, you have to be reasonably certain that your task definitions have the appropriate granularity. If you don’t, you’ll find a whole new world of Ways To Screw Up.
		Formally, the process of dividing work into smaller elements is called a Work Breakdown Structure, and there is a particular skill in breaking down project tasks into these right-sized chunks. That skill does not necessarily come naturally. That is, you probably know instinctively that “Build the customer database” or “implement social media” is too big a task to enter into your tracking system; it has to be broken into smaller components that you can identify, assign people to, and track progress on.
		At the other extreme, “Paint wall 1; paint wall 2; paint wall 3” is too much detail. In that scenario, a project manager (whether or not she has that title) spends more time updating the tracking system than doing the work. The task completion list doesn’t give a sense of what the team (of 1 or 100) actually accomplished, either.
		Let me reassure you: This process of identifying project tasks is something we all get better at with time and experience. But even the most novice of project managers (and team members!) wants to do a good job, so herein I provide guidelines at improving your skill.
		To keep this discussion under control, I don’t go into the skill (or art) of predicting how long a task will take. Nor am I aiming to help you decide how many people to put on the project. For that, the ideal answer is always five. Fewer than that and everybody has to do everything.
		</p>  



</div>
<!-- <H1>{{fluturimet}}</H1> -->


<link rel="stylesheet" href="../frontend/css/styles.css">



