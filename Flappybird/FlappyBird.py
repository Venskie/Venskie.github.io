import pygame
import sys
import time
import random




pygame.init()
clock = pygame.time.Clock()

def draw_floor(): 
    screen.blit(floor_img, (floor_x, 480))
    screen.blit(floor_img, (floor_x + 448, 480))
     
# Function to create pipes
def create_pipes():
    pipe_y = random.choice(pipe_height)
    top_pipe = pipe_img.get_rect(midbottom=(350, pipe_y - 250))
    bottom_pipe = pipe_img.get_rect(midtop=(350, pipe_y))
    return top_pipe, bottom_pipe


# Function for animation
def pipe_animation():
    global game_over, score_time
    for pipe in pipes:
        if pipe.top < 0:
            flipped_pipe = pygame.transform.flip(pipe_img, False, True)
            screen.blit(flipped_pipe, pipe)
        else:
            screen.blit(pipe_img, pipe)

        pipe.centerx -= 3
        if pipe.right < 0:
            pipes.remove(pipe)

        if bird_rect.colliderect(pipe):
            game_over = True

#function for score
def draw_score(game_state):
    if game_state == "game_on":
        score_Text = score_font.render(str(score), True, (255, 255, 255))
        score_rect = score_Text.get_rect(center=(width // 2, 66))
        screen.blit(score_Text, score_rect)
    elif game_state == "game_over":
        score_Text = score_font.render(f"Score:{score}", True, (255, 255, 255))
        score_rect = score_Text.get_rect(center=(width // 2, 66))
        screen.blit(score_Text, score_rect)

        high_score_text = score_font.render(f"High Score: {high_score}", True, (255, 255,255))
        high_score_rect = high_score_text.get_rect(center=(width // 2 ,420))
        screen.blit(high_score_text, high_score_rect)

#update score
def score_update():
    global score, score_time, high_score
    if pipes:
        for pipe in pipes:
            if 65 < pipe.centerx < 69 and score_time:
                score += 1
                score_time = False
            if pipe.left <= 0:
                score_time = True
    
    if score > high_score:
        high_score = score


# Function to change bird size
def change_bird_size():
    global bird_img_modified, bird_rect
    bird_img_modified = pygame.transform.scale(bird_img_modified, (bird_img_modified.get_width() + 5, bird_img_modified.get_height() + 5))
    bird_rect = bird_img_modified.get_rect(center=bird_rect.center)







#game window

width, height = 289, 511
clock = pygame.time.Clock()
screen = pygame.display.set_mode((width,height))
pygame.display.set_caption("Flappy Bird")


#setting background and base image
back_img = pygame.image.load("sprites/background.png")
floor_img = pygame.image.load("sprites/base.png")
floor_x = 0

#different stages of bird
bird_up = pygame.image.load("sprites/bird.png")
bird_down = pygame.image.load("sprites/bird.png")
bird_mid = pygame.image.load("sprites/bird.png")
birds = [bird_up, bird_mid, bird_down]
bird_index = 0
bird_flap = pygame.USEREVENT
pygame.time.set_timer(bird_flap, 200)
bird_img = birds[bird_index]
bird_rect = bird_img.get_rect(center=(67, 622 // 2))
certain_score = 1  # Change bird size every 10 points
bird_size_changed = False
bird_img_modified = bird_img
bird_movement = 0
gravity = 0.17



#loading pipe image
pipe_img = pygame.image.load("sprites/pipe.png")
pipe_height = [300, 400, 370, 460]

#for the pipes to appear
pipes = []
create_pipe = pygame.USEREVENT + 1
pygame.time.set_timer(create_pipe, 1200)



#display game over image
game_over = False
over_img = pygame.image.load("sprites/gameover1.png").convert_alpha()
over_rect = over_img.get_rect(center=(width // 2, height // 2))

#setting variable and font for score
score = 0
high_score = 0
score_time = True
score_font = pygame.font.Font("sprites/Kamikaze.ttf", 27)

#game loop
running = True
while running:
    clock.tick(90)


    #for checking the event
    for event in pygame.event.get():
        if event.type == pygame.QUIT:
            running = False
            sys.exit()
        if event.type == pygame.KEYDOWN:
            if event.key == pygame.K_SPACE and not game_over:
                bird_movement = 0
                bird_movement = -7

            if event.key == pygame.K_SPACE and game_over:
                game_over = False
                pipes = []
                bird_movement = 0 
                bird_rect = bird_img.get_rect(center=(67, 622 // 2))
                score_time = True
                score = 0

        # Add this block to change bird size every certain score
        if score > 0 and score % certain_score == 0 and not bird_size_changed:
            change_bird_size()
            bird_size_changed = True
    
    # Reset bird size change flag when score increments
        if score % certain_score != 0:
            bird_size_changed = False


            #load to different stages
        if event.type == bird_flap:
            bird_index += 1

            if bird_index > 2:
                bird_index = 0

            bird_img = birds[bird_index]
            bird_rect = bird_up.get_rect(center=bird_rect.center)

            #add pipes in list
        if event.type == create_pipe:
            pipes.extend(create_pipes())


    screen.blit(floor_img, (floor_x, 480))
    screen.blit(back_img, (0,0))


    #game over
    if not game_over:
        bird_movement += gravity
        bird_rect.centery += bird_movement
        rotated_bird = pygame.transform.rotozoom(bird_img, bird_movement * -6,1)
        
        if bird_rect.top < 5 or bird_rect.bottom >= 550:
            game_over = True

        screen.blit(rotated_bird, bird_rect)
        pipe_animation()       
        score_update()
        draw_score("game_on")

    elif game_over:
        screen.blit(over_img, over_rect)
        draw_score("game_over")

    #movee thebase
    floor_x -= 1
    if floor_x < -289//8:
        floor_x = 0

    draw_floor()

    #update the game
    pygame.display.update()


#quitting the pygame and sys
pygame.quit()
sys.exit()

