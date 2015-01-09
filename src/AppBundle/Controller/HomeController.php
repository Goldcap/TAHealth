<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

use AppBundle\Entity\CsTicket;
use AppBundle\Form\Type\ContactType;

class HomeController extends Controller
{
    /**                                   
     * @Route("/", name="homepage")
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        return $this->render('home/index.html.twig');
    }
    
    /**                                   
     * @Route("/conference_locations", name="conference_locations")
     */
    public function conference_locationsAction()
    {
        return $this->render('home/conference_locations.html.twig');
    }
    
    /**                                   
     * @Route("/events", name="events")
     */
    public function eventsAction()
    {
        return $this->render('home/events.html.twig');
    }
    
    /**                                   
     * @Route("/facilities", name="facilities")
     */
    public function facilitiesAction()
    {
        return $this->render('home/facilities.html.twig');
    }
    
    /**                                   
     * @Route("/video", name="video")
     */
    public function videoAction()
    {
        return $this->render('home/video.html.twig');
    }
    
    /**                                   
     * @Route("/program_suggestions", name="program_suggestions")
     */
    public function program_suggestionsAction()
    {
        return $this->render('home/program_suggestions.html.twig');
    }
    
    /**                                   
     * @Route("/video_streaming", name="video_streaming")
     */
    public function video_streamingAction()
    {
        return $this->render('home/video_streaming.html.twig');
    }
    
    /**                                   
     * @Route("/credits", name="credits")
     */
    public function creditsAction()
    {
        return $this->render('home/credits.html.twig');
    }
    
    /**                                   
     * @Route("/advisory_board", name="advisory_board")
     */
    public function advisory_boardAction()
    {
        return $this->render('home/advisory_board.html.twig');
    }
    
    /**                                   
     * @Route("/faq", name="faq")
     */
    public function faqAction()
    {
        return $this->render('home/faq.html.twig');
    }
    
    /**                                   
     * @Route("/about_us", name="about_us")
     */
    public function about_usAction()
    {
        return $this->render('home/about_us.html.twig');
    }
    
    /**                                   
     * @Route("/contact_us", name="contact_us")
     */
    public function contact_usAction()
    {
        return $this->render('home/contact_us.html.twig');
    }
    
    /**
     * @Route("/contact", name="contact")
     */
    public function contactAction(Request $request)
    {
        $form = $this->createForm(new ContactType());
        
        $done = FALSE;
                    
        if ($request->isMethod('POST')) {
            $form->bind($request);
    
            if ($form->isValid()) {
            
                $repository = $this->getDoctrine()->getRepository('AppBundle:CsTicket');
                $ticket = $repository->findOneBy(
                     array(  "csTicketSubject"=>$form->get('subject')->getData(),
                                "csTicketAuthor"=>$form->get('name')->getData(),
                                "csTicketAuthorEmail"=>$form->get('email')->getData()
                ));
                
                if ($ticket) {
                  $send = false;
                } else {
                  
                  $ticket = new CsTicket();
                  $ticket -> setCsTicketSubject( $form->get('subject')->getData() );
                  $ticket -> setCsTicketRecipient( 'kirsten@tahealth.org' );
                  $ticket -> setCsTicketAuthorEmail( $form->get('email')->getData() );
                  $ticket -> setCsTicketAuthor( $form->get('name')->getData() );
                  $ticket -> setCsTicketStatus( 1 );
                  $ticket -> setCsTicketPriority( 1 );
                  $created = new \DateTime("now");
                  $ticket -> setCsTicketDateCreated( $created );
                  $ticket -> setCsTicketIp( $_SERVER["REMOTE_ADDR"] );
                  $ticket -> setCsTicketUserAgent( $_SERVER["HTTP_USER_AGENT"] );
                  $ticket -> setCsTicketMessage( $form->get('message')->getData() );
                  $ticket -> setCsTicketData( serialize($_POST) );
                  
                  $em = $this->getDoctrine()->getManager();
                  $em->persist($ticket);
                  $em->flush();
                  
                  $ticket -> setCsTicketGuid( date('\TYz-md').sprintf("%05d",$ticket -> getCsTicketId()) );
                  
                  $em->persist($ticket);
                  $em->flush();
                  
                }
                
                $message = \Swift_Message::newInstance()
                    ->setSubject($form->get('subject')->getData())
                    ->setFrom($form->get('email')->getData())
                    ->setTo('kirsten@tahealth.org')
                    ->setBody(
                        $this->renderView(
                            'mail/contact.html.twig',
                            array(
                                'ip' => $request->getClientIp(),
                                'name' => $form->get('name')->getData(),
                                'email' => $form->get('email')->getData(),
                                'subject' => $form->get('subject')->getData(),
                                'message' => $form->get('message')->getData(),
                                'guid' => $ticket -> getCsTicketGuid()
                            )
                        )
                    );
    
                $this->get('mailer')->send($message);
    
                $request->getSession()->getFlashBag()->add('success', 'Your email has been sent! Thanks!');
                
                $done = TRUE;
                
                #return $this->redirect($this->generateUrl('contact'));
            } else {
                
                $errors = array();
                foreach ($form as $fieldName => $formField) {
                    // each field has an array of errors
                    $errors[$fieldName] = $formField->getErrors();
                }
            }
        }
    
        return $this->render('home/contact.html.twig',  array(
            'done' => $done,
            'form' => $form->createView()
            ));
        
    }
    
    /**                                   
     * @Route("/2011broadcast", name="2011broadcast")
     */
    public function broadcastAction()
    {
        return $this->render('home/2011broadcast.html.twig');
    }
}
